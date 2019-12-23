<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function alldonor()
     {
     	 $data=Registration::all();
       return view('alldonorlist',['donor'=>$data]);
     }
     public function admin_index()
    {
        return view('Admin.pages.index');
    }
}
