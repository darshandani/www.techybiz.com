<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\MessageNotification;
use App\Models\FaqModel;
use Illuminate\Support\Facades\Mail;
use PDF;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.services-details');
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        );

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = ServiceModel::create($data);

        $AdminEmail = config('settings.adminEmail');
        $mailData = [
            'name' => $request->name,  
            'email' => $request->email,
            'message' => $request->message            
        ];
        Mail::to($AdminEmail)->queue(new MessageNotification($mailData));

        return redirect('/services-details')->with('success','Thank you for getting in touch! We appreciate you contacting us Techy info....');
    }

 

    
}
