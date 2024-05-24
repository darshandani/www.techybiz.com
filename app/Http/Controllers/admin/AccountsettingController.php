<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Datatable\SSP;
use App\Models\AdminModel;

class AccountsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.accounts.account');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profileview()
    {

        $admin = Auth::guard('admin')->user();
        return view('backend.accounts.profile', compact('admin'));
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'email' => 'required|email|unique:admins,email', // Adjust the table name
            'image' => 'mimes:jpeg,jpg,png,gif|required',
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $account = AdminModel::create([
            // 'email' => $request->input('email'),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'role' => $request->input('role'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $ext = strtolower($file->getClientOriginalExtension());
                $filename = $account->id . '.' . $ext;
                $targetPath = IMAGE_PATH; // Define your target path
                $file->move($targetPath, $filename);
                $account->image = $filename;
                $account->save();
            } else {
                return redirect('account')->with("image", "Uploaded image is not valid.");
            }
        }

        return redirect('account')->with('success', 'Your account created successfully!');
    }


    public function getdata()
    {

        $table = 'admins';

        $primaryKey = 'id';

        $columns = [


            ['db' => 'firstName', 'dt' => 'firstName', 'field' => 'firstName'],
            ['db' => 'email', 'dt' => 'email', 'field' => 'email'],
            ['db' => 'role', 'dt' => 'role', 'field' => 'role'],

        ];

        $sql_details = [
            'user' => config('database.connections.mysql.username'),
            'pass' => config('database.connections.mysql.password'),
            'db' => config('database.connections.mysql.database'),
            'host' => config('database.connections.mysql.host')
        ];

        $joinQuery = "";
        $extraWhere = "";
        $groupBy = "";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy)
        );
    }
}
