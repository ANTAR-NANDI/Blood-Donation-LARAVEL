@extends('User.layouts.defaults')
@section('abc')

<div class="register-main-contant">
<div class="container bbi-wrap">
<div class="row">
<div class="login-mobile"> </div>
<div class="right-side">
<div class="ads">
<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!-- ads -->
<div class="tab-widget">
<ul class="nav nav-tabs">
<li class="active"><a href="#BLOOD-REQUESTS">BLOOD <span>REQUESTS</span></a></li>
<li><a href="#RECENT-DONORS">RECENT <span>DONORS</span></a></li>
<li><a href="#QUICK">QUICK <span>TIP</span></a></li>
</ul>
<div class="tab-content">
<div id="BLOOD-REQUESTS" class="tab-pane fade in active">
<div class="widget-main">
<div class="widget-inner">

    @foreach($request as $r)
    <div class='blood-req-widget scrollpar'>
        <div class='b-group2'>
            <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>{{$r->patientname}}</b>&nbsp <i class='fa fa-map-marker'></i>&nbsp{{$r->city}}</div>
            <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp{{$r->required}}&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp{{$r->required}}</div>
            <div class='sub-b-group-3'> </div>
        </div>
        <div class='b-group3'>
            <div class='b-group'>{{$r->blood}} </div>
            <br>
            <div class='sub-b-group-4'>
                <a data-toggle='tooltip' data-placement='top' title='View Details' href=tools/req/2059.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
            </div>
     </div>
    </div>
    
     @endforeach
    
    
    
</div>
<!-- /.widget-inner -->
</div>
<!-- /.widget-main -->
</div>
<div id="RECENT-DONORS" class="tab-pane fade">
<div class="widget-main">
<div class="widget-inner">
    @foreach($donor as $d)
     <div class='blood-req-widget'>
        <div class='rec-b-group'>{{$d->blood}} </div>
        <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>{{$d->fullname}} </b> ({{$d->city}})
            <br/>{{$d->updated_at}}</div>
    </div>
     @endforeach
   
</div>
<!-- /.widget-inner -->
</div>
<!-- /.widget-main -->
</div>
<div id="QUICK" class="tab-pane fade">
<div class="widget-main">
<div class="widget-main-title">
    <h4 class="widget-title">What you should eat before donating blood </h4> </div>
<!-- /.widget-main-title -->
<div class="widget-inner">
    <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better!
        <br/> Check out the following recommended foods to eat prior to your donation.</p>
    <table border="0" cellpadding="5" cellspacing="0" class="ULtable">
        <tr>
            <td><img src="../bbi_theme/images/arrow.jpg" width="8" height="5" /></td>
            <td>Low fat foods</td>
        </tr>
        <tr>
            <td><img src="../bbi_theme/images/arrow.jpg" width="8" height="5" /></td>
            <td>Iron rich foods</td>
        </tr>
    </table>
</div>
</div>
<!-- /.widget-main -->
</div>
</div>
<!-- tab-content -->
</div>
<!-- tab-widget -->
</div>
<!-- Right side -->
<div class="left-side">
<div class="row">
<div class="widget-item"> <span class="errspns"> </span>
<h2 class="welcome-text">Register as a Blood Donor</h2>
<form class="form-horizontal" method="post" action="{{ URL::to('register')}}">
@csrf

                <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                 @endif -->
<div class="mob-con-border">
<div class="con-border">
    <div class="col-md-12">
        <h3>Login Information</h3>
        <div class="row">
            <div class="col-md-6 mob-con-border">
                <div class="control-group">
                    <label>Full Name *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" rel="tooltip" name="donor_name" id="donor_name" value="" title="Please fill your Fullname Maximum 20 characters. " required> </div>
                       <span class="error">{{ $errors->first('name') }}</span>
                </div>
                <div class="control-group">
                    <label>Email ID *</label>
                    <div class="input-group">
                        <input type="email" class="form-control" rel="tooltip" name="emailid" id="emailid" value="" title="Email can contain only letters, numbers, periods (.), @, hyphens (-) and underscores (_)." required> </div>
                        <span class="error">{{ $errors->first('email') }}</span>
                </div>
            </div>
            <div class="col-md-6 mob-con-border">
                <div class="control-group">
                    <label>Password *</label>
                    <div class="input-group">
                        <input type="password" class="form-control" rel="tooltip" id="password" name="password" value="" title=" Please enter your password. Minimum 8 characters,one uppercase,one lowecase,one symbol,and number." required>
                         </div>
                         <span class="error">{{ $errors->first('password') }}
                         </span>
                </div>
                <div class="control-group">
                    <label>Confirm Password *</label>
                    <div class="input-group">
                        <input type="password" class="form-control" rel="tooltip" id="cpassword" name="cpassword" value="" title="Please Re-enter your password exactly as entered in previous field."required > </div>
                        <span class="error">{{ $errors->first('password') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="con-border">
    <div class="col-md-12">
        <h3> Donor Information</h3>
        <div class="row">
            <div class="col-md-6 mob-con-border">
                <div class="control-group">
                    <label>Date of Birth *</label>
                    <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                        <input type="date" class="form-control" placeholder="Select" rel="tooltip" name="dob" id="dob" value="" title="Please select your Date of Birth" required> </div>
                </div>
                <div class="control-group">
                    <label>Your Blood Group *</label>
                    <div class="input-group">
                        <select name="blood" required>
                            <option value="0">Select </option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <label for="blood" class="error"></label>
                    </div>
                </div>
                <!-- <div class="control-group"> <label>How often you donate blood?</label> <div class="input-group"> <select name="how_often" class='form-control lastdonated'> <option value="0">Select</option> <option value="yet-to-donate">Yet to donate</option> <option value="Regular donor">Regular donor</option> <option value="On need basis">On need basis</option> </select> </div> </div> -->
                <!-- <div class="control-group">
                    <label>How often you donate blood? *</label>
                    <div class="input-group">
                        <select name="how_often" id="type">
                            <option name="" value="0">Select</option>
                            <option name="yet" value="Yet to Donate">Yet to Donate</option>
                            <option name="regular" value="Regular donor">Regular donor</option>
                            <option name="on-need" value="On need basis">On need basis</option>
                        </select>
                    </div>
                </div> -->
            </div>
            <!-- col-md-6 -->
            <div class="col-md-6 mob-con-border">
                <div class="control-group">
                    <label>Gender *</label>
                    <div class="input-group"> <span class="radio-inline"> <input type="radio" name="gender" id="optionsRadios1" value="M"> <label for="optionsRadios1" class="radio-gender">Male</label> </span> <span class="radio-inline"> <input type="radio" name="gender" id="optionsRadios2" value="F"> <label for="optionsRadios2" class="radio-gender">Female</label> </span> </div>
                </div>
                <div class="control-group">
                    <label>Weight (Kg) *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" name="weight" id="weight" value="" rel="tooltip" title="Please enter your weight" required> </div>
                </div>
                <!-- <div class="control-group blooddonateddate" style="display: none;"> <label>Date of last blood donation</label> <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span> <input type="text" class="form-control" rel="tooltip" name="blooddonateddate" placeholder="Select" id="blooddonateddate" value="" readonly="readonly" title="Please select Last blood donation Date"> </div> </div> -->
                <div id="row_dim">
                    <div class="control-group blooddonateddate">
                        <label>Date of last blood donation</label>
                        <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" rel="tooltip" name="blooddonateddate" > </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="con-border">
    <div class="col-md-12">
        <div class="mobile-head">
            <h3>Contact Information</h3> </div>
        <div class="row">
            <div class="col-md-6 mob-con-border">
                <div class="control-group">
                    <label>Mobile No *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="mob_no" id="mob_no" rel="tooltip" value="" title="Please enter your Mobile Number"> </div>
                </div>
                <div class="control-group">
                    <label>Address *</label>
                    <div class="input-group">
                        <textarea type="textarea" class="form-control" rel="tooltip" name="address" id="address1" value="" title="Type your street address here.   Eg: #23, ABC Street"></textarea>
                    </div>
                </div>
               
            </div>
            <div class="col-md-6 mob-con-border">
                 <div class="control-group">
                    <label>City *</label>
                    <div class="input-group">
                        <select name="city_name">
                            <option value="0">Select </option>
                            <option value="Barguna">Barguna</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Bhola">Bhola</option>
                            <option value="Jhalokati">Jhalokati</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>


                            <option value="Brahmanbaria">Brahmanbaria</option>
                            <option value="Chandpur">Chandpur</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Cox's-Bazar">Cox's-Bazar</option>
                            <option value="Feni">Feni</option>
                                <option value="Bandarban">Bandarban 
                                    <option value="Amreli">Amreli</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Khagrachhari">Khagrachhari</option>
                            <option value="Lakshmipur">Lakshmipur</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            
                           
                        </select>
                        <label for="city_name" class="error"></label>
                    </div>
                </div>

                 <div class="control-group">
                    <label>Role *</label>
                    <div class="input-group">
                        <select name="role">
                            <option>Select </option>
                            <option value="Requestor">Requestor</option>
                            <option value="Donor">Donor</option>
                            
                           
                          
                           
                        </select>
                        <label for="city_name" class="error"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="clearfix"></div> -->
</div>
</div>
<!-- mobile close-->
<div class="clearfix"></div>
<div class="control-group mob-con-border">
<div class="controls">
    <div class="g-recaptcha" data-sitekey="6LfTwx0TAAAAAFkCeWGu9nesAY8BeBr9bgfRLtGA"></div>
</div>
</div>



<div class="control-group mob-con-border">
<div class="controls">
    <label class="checkbox">
        <input type="checkbox" value="" name="accept_terms" required> <span class="some">I have read the <a href="#" data-toggle="modal" data-target="#myModal-eligibility" >Eligibility Criteria</a> and confirm that I am eligible to donate blood. </span></label>


    <div class="modal fade" id="myModal-eligibility" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="widget-item-model">
                        <table width="100%" border="0" cellspacing="0" cellpadding="10">
                            <tr>
                                <td align="left">
                                    <div class="content">
                                        <h2>DOs and DON'Ts of blood donation</h2>
                                        <p>In order to ensure safe and health environment to both donors as well as recipients, we greatly recommend to follow the below rules:</p>
                                        <h2>DO donate blood, only if you satisfy all of the following conditions</h2>
                                        <table border="0" cellspacing="0" cellpadding="5">
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">You are between age group of 18-60 years.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Your weight is 45 kgs or more.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Your hemoglobin is 12.5 gm% minimum.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Your last blood donation was 3 or more months earlier.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</td>
                                            </tr>
                                        </table>
                                        <h2>DO NOT donate blood, if you have any of the following conditions</h2>
                                        <table border="0" cellspacing="0" cellpadding="5">
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Cold / fever in the past 1 week.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Under treatment with antibiotics or any other medication.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Major surgery in the last 6 months.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Vaccination in the last 24 hours.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Had fainting attacks during last donation.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Have regularly received treatment with blood products.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Shared a needle to inject drugs/ have history of drug addiction. </td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Had sexual relations with different partners or with a high risk individual.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                <td valign="top">Been tested positive for antibodies to HIV.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <br>
<label class="checkbox">
<input type="checkbox" value="condition" name="accept_condition" required> I agree to the <span class="some"> <a href="#" data-toggle="modal" data-target="#myModal-terms">Terms and Conditions</span></a> and consent to have my contact and donor information published to the potential blood recipients. </label>
<div class="modal fade" id="myModal-terms" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="widget-item-model">
    <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="10">
            <tr>
                <td align="left">
                    <h2>Privacy Policy</h2>
                    <p>The BloodBankIndia.net team is committed to protecting the rights of all visitors to our website. We recognize our obligation to keep personal information secure and have created this privacy statement to share our information gathering and dissemination practices for this website. We also assure you that none of your registered information will be shared with any third parties outside the BloodBankIndia.net or the parent company uSiS Technologies. However, the information that you have agreed to broadcast during the process of registration will be available for the public view. </p>
                    <h2>Collection and Use of On-line Information </h2>
                    <p>Our web server automatically collects your IP address when you visit our site. (Your IP address is your computer's unique address that lets other computers attached to the Internet know where to send data, but does not identify you individually). We use your IP address to help diagnose problems with our server and to compile statistics on site usage. We do not make your IP address available to anyone. From time to time, we may also use cookies on your web browser to store some of the user preference, this cookie will communicate only with this website and if you wish not have them saved, you may have them deleted from your computer using your browser&rsquo;s settings. When you visit certain areas of this site including the registration form, you may be asked to provide personal information (such as name, address, e-mail address, and phone number) that we need to process your request. In the event that you decline to provide such information, we will be unable to process your request. Still, we invite you to continue to visit the site and take advantage of the wealth of information it offers. Every site user who provides us with personal information has the right to inspect, amend, or correct his/her own personal information. You may do so either online by logging in, if you are a registered user, or through simply contacting us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                    <h2>Other Websites, Links and Resources </h2>
                    <p>This privacy policy extends to this website (<a href="../index.html">www.bloodbankindia.net</a>) only. If you link to another individual or entity's website through our website or re-directed from our website, you should read the privacy policy specific to that website to determine their practices. If you have any questions or concerns about the online policy for this site or its implementation you may contact us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                    <h2>Terms of use </h2>
                    <p>This is purely a non-profit website directed towards the welfare of our community. Any individual or entity that enrolls for our service does so with his/her own will and at no obligation to any one else or any other entity. We seriously condemn the use of this website for any commercial purpose, including solicitation for commercial gain based on the contact details posted by the registered users. We take the privacy of our users very seriously and therefore reserve the right to pursue a legal action against the individuals or entities violating our terms of use. </p>
                    <h2>Use of Donations</h2>
                    <p> We do accept funds in form of donation from those who volunteer themselves to do so; such funds collected will be used for running blood camps at select locations and for covering the part of the administrative expenses at running the website. </p>
                    <h2>Complaints Procedure </h2>
                    <p>Anyone who experiences a problem with the service provided by BloodBankIndia.net should raise the matter directly using our online contact us form, giving sufficient information to locate the material (such as an url) and clearly outlining the grounds for complaint. BloodBankIndia.net team will approach the individual responsible for the material in question with a view to resolving the matter to the satisfaction of the complainant. The formal complaints procedure should only be used where the complainant feels that the nature of the complaint is too serious to be dealt with informally, or where a satisfactory conclusion has not been reached after following the informal procedure. A formal complaint should be made in writing to BloodBankIndia.net team, who will acknowledge receipt and ensure that the matter is looked into at the earliest possible. An initial response to any complaint can be expected within seven days of its receipt; a full and considered response to the complaint should be completed within 30 days and any subsequent remedy implemented with the minimum of delay.</p>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<!-- model-body -->
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>
                                <div class="control-group mob-con-border">
                                    <div class="controls btn-bbi-group">
                                        <button  class="btn btn-danger btn-bbi">Register</button>
                                        <br/> </div>










                       <!--  <script >
                             @if(session('message'))

                             var type="{{Session::get('alert-type','info')}}"

                                     
                            switch(type){
                                case 'success':
                
                     toastr.success("{{ Session::get('message') }}");
    
                       break;
                       @endif
                   }
                        </script>   -->              
           



























                                       <!--  @if(session('msg'))
                                        <div class="alert alert-success">
                                            {{ session('msg')}}
                                        </div>
                                        <script>
                                            alert('Registered Successfully');
                                        </script>
                                        @endif -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Left side -->
            </div>
        </div>
    </div>
    <!-- register-main-contant -->
</body>
<!-- Mirrored from www.bloodbankindia.net/donors/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 09:28:55 GMT -->

</html>
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#register #city_name,#blood').select2({
            placeholder: ''
        });
        $('button[data-select2-open]').click(function() {
            $('#' + $(this).data('select2-open')).select2('open');
        });
    });
</script>
<script>
    $.validator.addMethod('numericOnly', function(value) {
        return /^([0-9\.])+$/.test(value);
    }, 'Please only enter numeric values (0-9.)');
    jQuery.validator.addMethod("lettersonly", function(value) {
        return /^[a-zA-Z\s]+$/.test(value);
    }, "Only alphabetical characters");
    jQuery.validator.addMethod("select1", function(value, element) {
        if (element.value == "0") {
            return false;
        } else {
            return true;
        }
    }, "Please select an option.");
    $(function() {
        $("#register").validate({
            ignore: [],
            rules: {
                donor_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    lettersonly: true
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 15
                },
                cpassword: {
                    required: true,
                },
                dob: {
                    required: true
                },
                blood: {
                    select1: true,
                    required: true,
                },
                how_often: {
                    select1: true,
                },
                city_name: {
                    select1: true,
                    required: true,
                },
                mob_no: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                weight: {
                    required: true,
                    numericOnly: true,
                    maxlength: 5
                },
                emailid: {
                    required: true,
                    email: true
                },
                address1: {
                    required: true
                } /*gender:{ required:true }*/
            },
            messages: {
                donor_name: {
                    required: "Please enter your name",
                    minlength: "Name should atleast 3 letter",
                    maxlength: "Name should not exceed 30 letter",
                    lettersonly: "Name should have only alphabets letter and space "
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Password should atleast 8 letter",
                    maxlength: "Password should not exceed 20 letter"
                },
                cpassword: {
                    required: "Please enter confirm password",
                },
                dob: {
                    required: "Please enter your date of birth"
                },
                mob_no: {
                    required: "Please enter your mobile number",
                    minlength: "Please enter valid mobile number"
                },
                address1: {
                    required: "Please enter your address"
                },
                blood: {
                    required: "Please select your blood group"
                },
                weight: {
                    required: "Please enter your weight",
                    numericOnly: "You should enter only number ",
                    maxlength: "Weight should be in 5 digits"
                },
                city_name: {
                    required: "Please select your city",
                    select1: "Please select your city"
                },
                emailid: {
                    required: "Please enter your email"
                },
                /*gender:{ required:"Please select your gender" }*/
            }
        });
    });
    $(".control-group .input-group select").addClass("form-control");
</script>

<script>
    $(function() {
        $('#row_dim').hide();
        $('#type').change(function() {
            if ($('#type').val() == 'Regular donor') {
                $('#row_dim').show();
            } else if ($('#type').val() == 'On need basis') {
                $('#row_dim').show();
            } else {
                $('#row_dim').hide();
            }
        });
    });
</script>
<!-- begin The Footer -->


<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "../../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1694815347450925";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $(document).ready(function() {
        $('#search select').select2({
            placeholder: ''
        });
        $('#search select').select2({
            data: [{
                id: 'A',
                text: 'A'
            }]
        });
        $('button[data-select2-open]').click(function() {
            $('#' + $(this).data('select2-open')).select2('open');
        });
    });
</script>
<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus()
    });
</script>
<script>
    $(document).ready(function() {
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });
    });
    $(document).ready(function() {
        incrementalNumber();
    });
</script>
<script>
    window.odometerOptions = {
        format: '(ddd).dd',
    };
</script>


    @stop