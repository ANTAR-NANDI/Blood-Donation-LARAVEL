<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Registration;

use Session;
class MyController extends Controller
{
    
     
    public function logout()
    {
         Session::flush();
       return redirect()->to('/');
    }
    public function requestor_index()
    {
        return view('Requestor.pages.index');
    }
     public function requestor_about()
    {
        return view('Requestor.pages.about');
    }

     
}
