<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->guard('admin')->id();
        $admin = AdminModel::find($id);
        // dd($admin->id);
        return view('backend.accounts.security', compact('admin'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function changepassword(Request $request)
    {

        $data = $request->all();
        // dd($request->id);
        $request->validate([
            'currentPassword' =>
            ['required',],
            'newpassword' =>
            [
                'required',

            ],
            'confirmPassword' =>
            [
                'required',
                'same:newpassword',
            ],
        ], [
            'currentPassword.required' => 'Old Password field is required',
            'newpassword.required' => 'New Password field is required',
            'confirmPassword.required' => 'Confirm Password field is required',
            'confirmPassword.same' => 'Password is not same',
        ]);

        $currentPassword = auth()->guard('admin')->user()->password;
        if (!Hash::check($data['currentPassword'], $currentPassword)) {
            return back()->with('error', 'Your password was wrong!!');
        } else {
            $makepassword = hash::make($data['newpassword']);
            $id = auth()->guard('admin')->id();
            AdminModel::where('id', $id)->update(['password' => $makepassword]);
        }
        // return view('backend.accounts.security')->with('success', 'Your password changed successfully!!');
        // return view('backend.accounts.security')->with('success', 'Your password changed successfully!!');
        return redirect()->route('security.index')->with('success', 'Your password changed successfully!!');
    }


    
}
