<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestorController extends Controller
{
    public function requestor_index()
    {
         return view('Requestor.pages.index');
    }
     public function requestor_contact()
    {
         return view('Requestor.pages.contact');
    }

     public function requestor_tips()
    {
         return view('Requestor.pages.tips');
    }

     public function requestor_about()
    {
         return view('Requestor.pages.about');
    }

     public function requestor_privacy()
    {
         return view('Requestor.pages.privacy');
    }
    public function requestor_request()
    {
         return view('Requestor.pages.request');
    }
}
