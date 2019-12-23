<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Registration;
use App\RequestBlood;
use Session;
class UserController extends Controller
{
    public function home()

    {
    	 $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                     $count = Registration::count();
                      $count1 = RequestBlood::count();
                       $count2 = Registration::where('active','=',$active)->count(); 

                     
       return view('User.pages.index',[
        'request'=>$request,
      
        'donor'=>$donor,
        'count'=>$count,
        'count1'=>$count1,
        'count2'=>$count2,

      ]);
       
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
        $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
       return view('User.pages.register',['request'=>$request],['donor'=>$donor]);
      // return view('User.pages.register');
    }
    public function privacy()
    {
        return view('User.pages.privacy');
    }

    public function search_blood(Request $request)
    {

          $blood = $request->blood;
    	  $city = $request->city_name;
          $active=1;
          $data = Registration::where('blood','=',$blood)
		    		   ->where('city','=', $city)
		    		   ->where('role','=','Donor')
                       ->where('active','=',$active)
		    		   ->get();
		    		 //  dd($data);
         return view('User.pages.search_blood',['donors'=>$data]);

    }
    public function search()
    {
    	return view('User.pages.search_blood');
    }
    
}
