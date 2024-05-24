<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use App\Helpers\Datatable\SSP;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.project');
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
            'name' => 'required|unique:projects',
            'email' => 'required|unique:projects',
            'phone' => 'required|unique:projects',
            'subject' => 'required',
            'pname' => 'required|unique:projects',
            'description' => 'required',
            'is_discount' => 'required',
            'payment_status' => 'required',
            'submited_at' => 'required',
            'price' => 'required',
            'status' => 'required',
        );
        $data = $request->all();
        $validator = validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->route('project.index')->withErrors($validator)->withInput();
        }
        $usersproject = ProjectModel::create($data);
        return redirect()->route('project.index')->with('success', 'Your Project Successfully Added.');
    }


    //for project status update
    public function projectStatusUpdate(Request $request)
    {
        $response = ['status' => false, 'msg' => ''];
        try {
            ProjectModel::findOrFail($request->id)->update(['status' => $request->status]);
            $response['status'] = true;
            $response['msg'] = "Project status updated successfully.";
        } catch (\Throwable $th) {
            $response['msg'] = $th->getMessage();
        }
        return response()->json($response);
    }

    //for payment status update
    function PaymentStatusUpdate(Request $request)
    {
        // dd($request->status);
        $response = ['status' => false, 'msg' => ''];
        try {
            ProjectModel::findOrFail($request->id)->update(['payment_status' => $request->status]);
            $response['status'] = true;
            $response['msg'] = "Payment status updated successfully.";
        } catch (\Throwable $th) {
            $response['msg'] = $th->getMessage();
        }
        return response()->json($response);
    }

    //for discount status update
    function DiscountStatusUpdate(Request $request)
    {
        // dd($request->status);
        $response = ['status' => false, 'msg' => ''];
        try {
            ProjectModel::findOrFail($request->id)->update(['is_discount' => $request->status]);
            $response['status'] = true;
            $response['msg'] = "Payment status updated successfully.";
        } catch (\Throwable $th) {
            $response['msg'] = $th->getMessage();
        }
        return response()->json($response);
    }


    //for discount status update
    public function ShowProjectDetails(Request $request)
    {
        $response = ['status' => false, 'msg' => ''];
        try {
            $ProjectDetails = ProjectModel::findOrFail($request->id);
            $submited_at = date('d M Y', strtotime($ProjectDetails->submited_at));

            if ($ProjectDetails->is_discount == 2) {
                $is_discount = "Discount";
            } else {
                $is_discount = "Undiscount";
            }

            if ($ProjectDetails->payment_status == 1) {
                $payment_status = "Processing";
            } else if ($ProjectDetails->payment_status == 2) {
                $payment_status = "Success";
            } else {
                $payment_status = "Failed";
            }

            if ($ProjectDetails->status == 1) {
                $project_status = "Process";
            } else if ($ProjectDetails->status == 2) {
                $project_status = "Approved";
            } else {
                $project_status = "Pending";
            }


            $response['status'] = true;
            $response['name'] = $ProjectDetails->name;
            $response['email'] = $ProjectDetails->email;
            $response['phone'] = $ProjectDetails->phone;
            $response['subject'] = $ProjectDetails->subject;
            $response['pname'] = $ProjectDetails->pname;
            $response['description'] = $ProjectDetails->description;
            $response['price'] = $ProjectDetails->price;
            $response['is_discount'] = $is_discount;
            $response['payment_status'] = $payment_status;
            $response['submited_at'] = $submited_at;
            $response['project_status'] = $project_status;
        } catch (\Throwable $th) {
            $response['status'] = false;
            $response['msg'] = $th->getMessage();
        }
        return response()->json($response);
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

    public function csv()
    {
        $fileName = 'project.csv';
        $project = ProjectModel::all();

        $headers = [
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',   'Content-type'        => 'text/csv',   'Content-Disposition' => 'attachment; filename=UserList.csv',   'Expires'             => '0',   'Pragma'              => 'public'
        ];
        $columns = array('name', 'email', 'phone', 'subject', 'pname', 'description', 'price', 'is_discount', 'payment_status', 'submited_at', 'status');
        $callback = function () use ($project, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($project as $value) {
                $row['name']  = $value->name;
                $row['email']  = $value->email;
                $row['phone']    = $value->phone;
                $row['subject']  = $value->subject;
                $row['pname']  = $value->pname;
                $row['description']  = $value->description;
                $row['is_discount']  = $value->is_discount;
                $row['payment_status']  = $value->payment_status;
                $row['submited_at']  = $value->submited_at;
                $row['status']  = $value->status;


                fputcsv($file, array($row['name'], $row['email'], $row['phone'], $row['subject'], $row['pname'], $row['description'], $row['is_discount'], $row['payment_status'], $row['submited_at'], $row['status']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function getdata()
    {

        $table = 'projects';

        $primaryKey = 'id';

        $columns = [


            ['db' => 'email', 'dt' => 'email', 'field' => 'email'],
            ['db' => 'pname', 'dt' => 'pname', 'field' => 'pname'],
            ['db' => 'price', 'dt' => 'price', 'field' => 'price'],
            ['db' => 'submited_at', 'dt' => 'submited_at', 'field' => 'submited_at'],
            array('db' => 'submited_at', 'dt' => 'submited_at', 'formatter' => function ($d, $row) {
                return date('d M Y', strtotime($d));
            }, 'field' => 'submited_at'),
            array(
                'db' => 'payment_status', 'dt' => 'payment_status', 'formatter' => function ($d, $row) {
                    $html = '<select class="my-2 select2 form-select" onchange="PaymentStatusChange(' . $row["id"] . ',this.value)" ' . ($d == 2 ? "disabled" : "") . '>
                    <option value="1"' . ($d == 1 ? ' selected' : '') . '>Processing</option>
                    <option value="2"' . ($d == 2 ? ' selected' : '') . '>Success</option>
                    <option value="3"' . ($d == 3 ? ' selected' : '') . '>Failed</option>
                    </select> 
                    <select class="my-1 select2 form-select" onchange="DiscountStatusChange(' . $row["id"] . ',this.value)">
                    <option value="1"' . ($row["is_discount"] == 1 ? ' selected' : '') . '>Undiscount</option>
                    <option value="2"' . ($row["is_discount"] == 2 ? ' selected' : '') . '>Discount</option>
                    </select>';
                    return $html;
                }, 'field' => 'payment_status'
            ),
            array(
                'db' => 'status', 'dt' => 'status', 'formatter' => function ($d, $row) {
                    $html = '<select class="my-1 select2 form-select" onchange="ProjectStatusChange(' . $row["id"] . ',this.value)"  ' . ($d == 1 ? "disabled" : "") . '>
                    <option value="0"' . ($d == 0 ? ' selected' : '') . '>Process</option>
                    <option value="1"' . ($d == 1 ? ' selected' : '') . '>Approved</option>
                    <option value="2"' . ($d == 2 ? ' selected' : '') . '>Pending</option>
                    </select>';

                    $html .= '<button title="Click to Show Details" class="mt-1 w-100 btn btn-success showDetails" data-id="' . $row["id"] . '">Show Detail</button>';
                    return $html;
                }, 'field' => 'status'
            ),
            ['db' => 'is_discount', 'dt' => 'is_discount', 'field' => 'is_discount'],
            ['db' => 'id', 'dt' => 'id', 'field' => 'id'],


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
