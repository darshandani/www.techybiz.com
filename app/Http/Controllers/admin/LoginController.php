<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\UsernameRule;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordVerification;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Contracts\Mail\Mailable;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.login');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd(auth()->guard('admin')->attempt($credential),$request->email,$request->password,$request->all());
        if (auth()->guard('admin')->attempt($credential)) {
            return redirect()->route('dashboard')->with('success', 'Login Successfully!');
        }
        // dd($credential);
        return redirect()->back()->with('error', 'incorrect email or password. please try again.');
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        session()->flush();
        session()->regenerate();
        return redirect()->route('login')->with('success_message', 'You are successfully logged out.');
    }



    //FORGET PASSWORDS METHOS
    public function forgotpassword()
    {
        return view('backend.accounts.forgetpass');
    }


    public function sendforgotpasswordlink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.',
        ]);

        $user = AdminModel::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User is not exists');
        } else {
            $token = Str::random(64);

            PasswordReset::create([
                'email' => $request->email,
                'token' => $token
            ]);

            $mailData = [
                'email' => $request->email,
                'token' => $token
            ];
            $AdminEmail = config('settings.adminEmail');

            Mail::to($request->email)->queue(new ForgotPasswordVerification($mailData, $user));
            return redirect()->route('login')->with('success', 'Email Verification Link Sent');
        }
    }

    public function verifyforgotemail($token)
    {

        $verifyUser = PasswordReset::where('token', $token)->first();
        $email = $verifyUser->email;
        $user = AdminModel::where('email', $email)->first();

        return view('backend.accounts.passwordreset', compact('email', 'user'));
    }

    public function setpassword(Request $request)
    {
        $rules = array(
            'password' => 'required|same:confirmpassword',
            'confirmpassword' => 'required'
        );
        $data = $request->all();

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($request->password);
        // dd($data);
        $user = AdminModel::where('email', $request->email)->first();

        if ($user) {
            $user->password = $data['password'];
            $user->save();
            PasswordReset::where('email', $request->email)->delete();
            return redirect()->route('login')->with('success', 'Your Password has been Reset Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
