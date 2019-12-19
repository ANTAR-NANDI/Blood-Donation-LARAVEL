<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Registration;

use Session;
class MyController extends Controller
{
    
     public function home()

    {
        return view('User.pages.index');
    }
    public function about()
    {
    	return view('User.pages.about');
    }

    public function request()
    {
    	return view('User.pages.request');
    }
    public function tips()
    {
    	return view('User.pages.tips');
    }
     public function contact()
    {
        return view('User.pages.contact');
    }

    public function register()
    {
        return view('User.pages.register');
    }
    public function privacy()
    {
        return view('User.pages.privacy');
    }
    public function admin_index()
    {
        return view('Admin.pages.index');
    }
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
