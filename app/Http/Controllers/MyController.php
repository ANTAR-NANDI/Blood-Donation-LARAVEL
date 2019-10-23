<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
    	return view('User.pages.index');
    }
    public function alldonorlist()
    {
    	return view('User.pages.alldonorlist');
    }

    public function bank()
    {
    	return view('User.pages.bank');
    }
    public function tips()
    {
    	return view('User.pages.tips');
    }
     public function signin()
    {
        return view('User.pages.signin');
    }
}
