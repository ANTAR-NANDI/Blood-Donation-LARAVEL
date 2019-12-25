<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;
use Session;
use App\RequestBlood;
use App\Donation;
class DonorController extends Controller
{
    public function donor_index()
    {
    	       $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                     $count = Registration::where('role','=','Donor')
                                  ->where('active','=',$active)
                     ->count();
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
    	return view('Donor.pages.search_blood');
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
         return view('Donor.pages.search_blood',['donors'=>$data]);

    }


    public function donor_about()
    {
        return view('Donor.pages.about');
    }
  
     public function  donor_contact()
    {
        return view('Donor.pages.contact');
    }
 public function donor_request()
    {
      $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
       return view('Donor.pages.request',['request'=>$request],['donor'=>$donor]);
         //return view('Requestor.pages.request');
    }


    public function request_blood_store(Request $request)
    {
       
       $user_id=Session::get('userid');
         $obj=new RequestBlood();
        $obj->patientname=$request->patient_name;
        $obj->hospitaladdress=$request->hospital_detail;
        $obj->blood=$request->blood;
        $obj->city=$request->city_name;
        $obj->amount=$request->amount;
        $obj->contactname=$request->contact_name;
          $obj->contactemail=$request->contact_emailid;
          $obj->contactnumber=$request->contact_number;

          $obj->message=$request->other_mess;
          $obj->required=$request->date;
           $obj->user_id=$user_id;
           //dd($obj);
        
        if($obj->save())
        {
               
            return redirect('Donor/request')->with('msg', 'Your Requested Has benn Accepted');
        }
    }

    public function your_request()
    {
        $user_id=Session::get('userid');
        $data =RequestBlood::where('user_id','=',$user_id)
                       
                       ->get();
         return view('Donor.pages.yourrequest',['requests'=>$data]);

    }

    public function update($id)
    {
        $employee=RequestBlood::find($id);
        $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
      // return view('Requestor.pages.request',['request'=>$request],['donor'=>$donor]);
       return view('Donor.pages.editrequest',['editrequest'=>$employee,'request'=>$request,'donor'=>$donor]);
    }

    public function update_data(Request $request,$id)
    {
        $obj=RequestBlood::find($id);
      // $user_id=Session::get('userid');
        
        $obj->patientname=$request->patient_name;
        $obj->hospitaladdress=$request->hospitaladdress;
        $obj->blood=$request->blood;
        $obj->city=$request->city_name;
        $obj->amount=$request->amount;
        $obj->contactname=$request->contact_name;
          $obj->contactemail=$request->contact_emailid;
          $obj->contactnumber=$request->contact_number;

          $obj->message=$request->other_mess;
          $obj->required=$request->date;
           
           if($obj->save())
        {
           
            return redirect()->to('Donor/yourrequest');
        }
    }

    public function delete($id)
    {
      $obj=RequestBlood::find($id);
      if($obj->delete()){
        return redirect()->to('Donor/yourrequest');
        //echo "successful";
      }
    }

    //Donation Related
     public function adddonation()
    {
         $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
       return view('Donor.pages.adddonation',['request'=>$request],['donor'=>$donor]);
       // return view('Donor.pages.adddonation');
        //echo "successful";
      
    }
     
     public function donation_store(Request $request)
    {
       
       $user_id=Session::get('userid');
         $obj=new Donation();
        $obj->patientname=$request->patient_name;
        $obj->hospitaladdress=$request->hospital_detail;
        $obj->blood=$request->blood;
        $obj->city=$request->city_name;
        $obj->amount=$request->amount;
        $obj->date=$request->date;
           $obj->donorid=$user_id;
           //dd($obj);
        
        if($obj->save())
        {
               
            return redirect('Donor/adddonation')->with('msg', 'Your Requested Has benn Accepted');
        }
    }

    public function donor_donation()
    {
        $user_id=Session::get('userid');
        $data =Donation::where('donorid','=',$user_id)
                       
                       ->get();
         return view('Donor.pages.mydonation',['donations'=>$data]);

    }


    




    
    
}
