<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\SignupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'username' => 'required|unique:signup',
            'email' => 'required|unique:signup',
            'phone' => 'required|unique:signup',
            'password' => 'required|same:confirmpassword',
            'confirmpassword' => 'required'
        );
        $data = $request->all();
        $validator = validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect('signup')->withErrors($validator)->withInput();
        }
        $data['password'] = Hash::make($request->password);
        $user = SignupModel::create($data);
        return redirect('/')->with('success', 'You are successfully register.s');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
