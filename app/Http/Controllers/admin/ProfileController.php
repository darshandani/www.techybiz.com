<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\AccountModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.accounts.profile');
        // $profiles = AccountModel::all();
        // return view('backend.accounts.profile', ['profiles' => $profiles]);
    }

    
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user

        return view('backend.accounts.profile', compact('user'));
    }
}
