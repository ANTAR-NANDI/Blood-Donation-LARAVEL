<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // public function home()
    // {
    // 	return view('User.pages.index');
    // }
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
}
