<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Helpers\Datatable\SSP;
use App\Mail\ContactMail;

class UsecontactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //     return view('admin.usercontact');

        $contacts = ContactModel::all();
        return view('backend.usercontacts', ['contacts' => $contacts]);
        // return view('backend.usercontacts');
    }

    public function destroy(string $id)
    {
        $usercontact = ContactModel::find($id);
        if($usercontact){
            $usercontact->delete();
            return response()->json(['status'=>true,'msg'=> 'User Delete Successfully.']);
        } else {
            return response()->json(['status'=>false,'msg'=>'User Delete Faild.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getdata()
    {

        $table = 'contacts';

        $primaryKey = 'id';

        $columns = [


            ['db' => 'name', 'dt' => 'name', 'field' => 'name'],
            ['db' => 'email', 'dt' => 'email', 'field' => 'email'],
            ['db' => 'message', 'dt' => 'message', 'field' => 'message'],
            [
                'db' => 'id', 'dt' => 'delete', 'field' => 'delete',
                'formatter' => function ($d, $row) {
                    return ' <button  data-id="' . $d . '" class="btn delcont"><i class="fa-solid fa-trash text-danger"></i></button>';
                }

            ],
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
