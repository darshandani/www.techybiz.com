<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.index');
    }
 
    public function projectgrid()
    {
        return view('frontend.coming-soon');
    }

    public function blongsgrid()
    {
        return view('frontend.blog-grid');
    }

    public function aboute()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }
  
    // public function servicesdetails()
    // {
    //     return view('frontend.services');
    // }

    public function team()
    {
        return view('frontend.team');
    }
  
    public function teamdetalis()
    {
        return view('frontend.team-details');
    }

    public function price()
    {
        return view('frontend.price');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function error()
    {
        return view('frontend.error');
    }

    public function comingsoon()
    {
        return view('frontend.coming-soon');
    }

}