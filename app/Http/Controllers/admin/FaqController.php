<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FaqModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Helpers\Datatable\SSP;
use Illuminate\Support\Facades\Validator;
use PDF;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('backend.addfaq');
    }

    public function faqlisting()
    {
        $faqlists = FaqModel::all();
        return view('backend.faqListing', ['faqlists' => $faqlists]);
    }


    public function frontendfaq()
    {
        $faqlists = FaqModel::all();
        return view('frontend.faq', ['faqlists' => $faqlists]);
    }


    /**
     * Show the form for creating a new resource.
     */


    public function show($id)
    {
        // dd($id);
        $faq = FaqModel::find($id);
        // dd($faq);
        if ($faq) {
            return response()->json(['status' => true, 'title' => $faq->title,  'description' => $faq->description]);
        } else {
            return response()->json(['status' => false, 'message' => 'FAQ not found.']);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required|unique:faq',
            'description' => 'required|unique:faq',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $projects = FaqModel::create($data);
        // dd($data);
        return redirect()->route('addfaq')->with('success', 'Your FAQ successfully Added!');
    }


    public function edit($id)
    {
        $faq = FaqModel::findOrFail($id);
        return view('backend.editfaq', compact('faq'));
    }


    public function update(Request $request, $id)
    {
        $faq = FaqModel::findOrFail($id);

        $rules = [
            'title' => 'required|unique:faq,title,' . $id,
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('faq.edit', $id)->withErrors($validator)->withInput();
        }
        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->save();

        return redirect()->route('faqlisting')->with('success', 'FAQ entry updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $faq = FaqModel::find($id);
        if ($faq) {
            $faq->delete();
            return response()->json(['status' => true, 'msg' => 'User Delete Successfully.']);
        } else {
            return response()->json(['status' => false, 'msg' => 'User Delete Faild.']);
        }
    }


    //EXPORT PDF FILE
    public function faq_export_pdf()
    {
        $faqs = FaqModel::get();


        $pdf = PDF::loadView(
            'backend.pdf.faq_pdf',
            ['faqs' => $faqs]
        );
        return $pdf->download('FAQS.pdf');
        
    }


    //EXPORT EXCEL FILE
    public function export_faqs()
    {
    }


    //EXPORT CSV FILE
    public function csv_faqs()
    {
        $fileName = 'project.csv';
        $faq = FaqModel::all();

        $headers = [
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',   'Content-type'        => 'text/csv',   'Content-Disposition' => 'attachment; filename=Faqlist.csv',   'Expires'             => '0',   'Pragma'              => 'public'
        ];
        $columns = array('title', 'description');
        $callback = function () use ($faq, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($faq as $value) {
                $row['title']  = $value->title;
                $row['description']  = $value->description;



                fputcsv($file, array($row['title'], $row['description']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function getdata()
    {

        $table = 'faqs';
        $primaryKey = 'id';

        $columns = [


            ['db' => 'title', 'dt' => 'title', 'field' => 'title'],
            ['db' => 'description', 'dt' => 'description', 'field' => 'description'],
            [
                'db' => 'id',
                'dt' => 'edit',
                'field' => 'edit',
                'formatter' => function ($d, $row) {
                    // return '<a href="' . route('faq.edit', $d) . '" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen"></i></a>';
                }
            ],
            [
                'db' => 'id', 'dt' => 'delete', 'field' => 'delete',
                'formatter' => function ($d, $row) {
                    return '
                        <button class="btn  btn-sm view-faq" title="Click to view" data-id="' . $d . '" data-bs-toggle="modal"> <i class="fa-solid fa-eye text-primary"></i></button>
                        <a href="' . route('faq.edit', $d) . '" title="Click to edit" class="btn btn-sm"><i class="fa-solid fa-pen text-success"></i></a>
                        <button title="Click to delete" class="btn btn-sm sk" data-id="' . $d . '"><i class="fa-solid fa-trash text-danger"></i></button>';
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
