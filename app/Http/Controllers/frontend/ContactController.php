<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use App\Mail;
use App\Mail\MessageNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
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
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        );

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $contact = ContactModel::create($data);
        $mailData = [
            'name' => $request->name,  
            'email' => $request->email,
            'message' => $request->message            
        ];
        // dd($mailData);
        $AdminEmail = config('settings.adminEmail');
        Mail::to($AdminEmail)->queue(new MessageNotification($mailData));

        return redirect('contact')->with('success', 'Thank you for getting in touch! We appreciate you contacting us Techy info....');
    }
}
