<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;
use Session;
use App\RequestBlood;
class DonorController extends Controller
{
    public function donor_index()
    {
    	       $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                     $count = Registration::count();
                      $count1 = RequestBlood::count();
                       $count2 = Registration::where('active','=',$active)
                                         ->where('role','=','Donor')
                                           ->count(); 

                     
       return view('Donor.pages.index',[
        'request'=>$request,
      
        'donor'=>$donor,
        'count'=>$count,
        'count1'=>$count1,
        'count2'=>$count2,

      ]);
    	return view('Donor.pages.index');
    }
    public function search()
    {
    	return view('Requestor.pages.search_blood');
    }
    
}
