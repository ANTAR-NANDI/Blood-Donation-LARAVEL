@extends('User.layouts.defaults')
@section('abc')
<div class="container">
<div class="card">
  <div class="card-header">
    <h3 style="color: green">All Blood Bank</h3>
   

  </div>
  
  <div class="card-body">
      <div class="table-responsive">          
  <table class="table" style="border: 2px solid #e6e6e6">
    <thead style="background-color: #e6e6e6">
      <tr>
        <th>Name</th>
        <th>Catagory</th>
        <th>District</th>
 
        <th>Contact</th>
         <th>Details</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chittagong Blood Bank & Transfusion Centre</td>
        <td>National</td>
        <td>Chittagong</td>
        <td> 01837-690914</td>
         <td><a class="nav-link" href="#" data-toggle="modal" data-target="#bloodbank1">View Details</a></td>
       
      </tr>
      <tr>
         <td>Fatema Begum Red Crescent Blood Center</td>
        <td>National</td>
        <td>Chittagong</td>
        <td>031-612395</td>
        <td><a class="nav-link" href="#" data-toggle="modal" data-target="#bloodbank2">View Details</a></td>
      </tr>
      <tr>
         <td>Landsteiner Blood Bank And Transfusion Medicine Center</td>
        <td>National</td>
        <td>Chittagong</td>
        <td>01857-529998</td>
          <td><a class="nav-link" href="#" data-toggle="modal" data-target="#bloodbank3">View Details</a></td>
      </tr>
       <tr>
         <td>Islami Bank Hospital Blood Bank</td>
        <td>National</td>
        <td>Dhaka</td>
        <td>8317090, 8321495</td>
        <td><a class="nav-link" href="#" data-toggle="modal" data-target="#bloodbank1">View Details</a></td>
      </tr>
    </tbody>
  </table>
  </div>

  </div>
</div>                                              
</div>
</body>

</div>



     

     <div class="modal fade" id="bloodbank1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Details of this blood bank</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
                <div class="modal-body"><pre class="text-uppercase">
Name :Chittagong Blood Bank & Transfusion Centre.
Adress:Mayabini building 57 K.B. Fazlul Khader RD, east Gate, Chittagong
Saturday : Open 24 Hours
Sunday : Open 24 Hours
Monday : Open 24 Hours
Tuesday : Open 24 Hours
Wednesday : Open 24 Hours
Thrusday : Open 24 Hours
Friday : Open 24 Hours
Contact: 01837-690914</pre>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>









            <div class="modal fade" id="bloodbank2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Details of this blood bank</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
                <div class="modal-body"><pre>
Name :Fatema Begum Red Crescent Blood Center.
Adress:395 Kata Pahar Ln, Chittagong.
Saturday : 9 am - 8 pm
Sunday : 9 am - 8 pm
Monday : 9 am - 8 pm
Tuesday : 9 am - 8 pm
Wednesday : 9 am - 8 pm
Thrusday : 9 am - 8 pm
Friday : 9 am - 8 pm
Contact: 031-612395</pre>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>







            <div class="modal fade" id="bloodbank3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Details of this blood bank</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
                <div class="modal-body"><pre>
Name :Landsteiner Blood Bank And Transfusion Medicine Center
Adress :Golphara more,GEC,Chittagong.
Saturday : Open 24 Hours
Sunday : Open 24 Hours
Monday : Open 24 Hours
Tuesday : Open 24 Hours
Wednesday : Open 24 Hours
Thrusday : Open 24 Hours
Friday : Open 24 Hours
Contact: 01857589992</pre>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
@stop
