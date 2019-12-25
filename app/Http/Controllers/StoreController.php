<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Registration;
class StoreController extends Controller
{
    public function store(Request $request)
    {
       
       
         $obj=new Registration();
        $obj->fullname=$request->donor_name;
        $obj->email=$request->emailid;
        $obj->password=md5($request->password);
        $obj->birth_date=$request->dob;
        $obj->gender=$request->gender;
        $obj->blood=$request->blood;
          $obj->role=$request->role;
          $obj->weight=$request->weight;
          $obj->mobile=$request->mob_no;
          $obj->address=$request->address;
          $obj->city=$request->city_name;
          $obj->active=1;
        
        if($obj->save())
        {
          //   $notification = array(
          // 'message'=>'Successfully Inserted',
          // 'alert-type'=>'success'
          //   );
            return redirect('User/register')->with('signup', 'Thanks for Registration!');
            // return back()->with($notification);
        }
    }


    public function contactstore(Request $request)
    {
        
         $obj=new Contact();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->message=$request->message;
        $obj->query=$request->query1;
      $obj->mobile=$request->mobile;
      $obj->city=$request->city_name;
      
        
        if($obj->save())
        {   
            return redirect('User/contact')->with('contact', 'Thanks for Contact US!');
            
        }
    }
    public function login(Request $request)
    {
    	//dd($request);
    	$email = $request->emailid;
    	$password = md5($request->password);
        
    	$obj = Registration::where('email','=',$email)
		    		   ->where('password','=', $password)
		    		   ->first();
    	if($obj){
    		// dd($obj);
    		$request->session()->put('userid', $obj->id);
    		$request->session()->put('username', $obj->fullname);
    		$request->session()->put('userrole', $obj->role);
        
            if($request->session()->get('userrole') =='Admin')
            {
             // dd('Admin');
               //return redirect()->to('Admin/home');
               return redirect('Admin/home')->with('loggedin', 'Successfully Loggedin');
            }
            else if($request->session()->get('userrole') =='Donor')
            {
              //dd('Donor');
               return redirect('Donor/home')->with('loggedin', 'Successfully Loggedin' );
            }
            else if($request->session()->get('userrole') =='Requestor')
            {
             // dd('Requestor');
              return redirect('Requestor/home')->with('loggedin', 'Successfully Loggedin');
             //  return redirect()->to('Requestor/home');
            }
    		
    	}
    	else {
    		return redirect()->back()->with('invalidlogin',"Invalid Email or Password");
    	}
    }
}
