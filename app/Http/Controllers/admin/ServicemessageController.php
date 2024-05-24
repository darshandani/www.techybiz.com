<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use App\Helpers\Datatable\SSP;
use PDF;

class ServicemessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceModel::all();
        return view('backend.servicemessage', ['services' => $services]);
        // return view('admin.servicemessage');
    }

    public function user_export_csv()
    {
        $fileName = "user.csv";
        $users = ServiceModel::all();
        $headers = [
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',   'Content-type'        => 'text/csv',   'Content-Disposition' => 'attachment; filename=usermessgaes.csv',   'Expires'             => '0',   'Pragma'              => 'public'
        ];
        $columns = array('name', 'email', 'message');
        $callback = function () use ($users, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($users as $value) {
                $row['name']  = $value->name;
                $row['email']  = $value->email;
                $row['message']  = $value->message;

                fputcsv($file, array($row['name'], $row['email'], $row['message']));
            }

            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function user_export_pdf()
    {
        $users = ServiceModel::get();


        $pdf = PDF::loadView(
            'backend.pdf.usermessages',
            ['users' => $users]
        );
        return $pdf->download('users.pdf');
    }






    public function getdata()
    {

        $table = 'services';

        $primaryKey = 'id';

        $columns = [


            ['db' => 'name', 'dt' => 'name', 'field' => 'name'],
            ['db' => 'email', 'dt' => 'email', 'field' => 'email'],
            ['db' => 'message', 'dt' => 'message', 'field' => 'message'],

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
