<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;
use App\RequestBlood;
use App\Contact;
class AdminController extends Controller
{
     public function alldonor()
     {
      $active=1;
      $active1=0;
     	 $data=Registration::where('active','=',$active)
                            ->orWhere('active','=',$active1)
                            ->paginate(4);
      // dd($data);
       return view('Admin.pages.allldonorlist',['donors'=>$data]);
     }
     public function admin_index()
    {
    	$active=1;
         
                     $count = Registration::count();
                      $count1 = RequestBlood::count();
                       $count2 = Registration::where('active','=',$active)
                                         ->where('role','=','Donor')
                                           ->count(); 

                     
       return view('Admin.pages.index',[
        
        'count'=>$count,
        'count1'=>$count1,
        'count2'=>$count2,

      ]);
       
    }
     public function message()
     {
      
       $data=Contact::all();
                            
      // dd($data);
       return view('Admin.pages.message',['message'=>$data]);
     }
}
