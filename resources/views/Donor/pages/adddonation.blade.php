@extends('Donor.layouts.defaults')
@section('abc')


   <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
    <script>
        $.validator.addMethod('numericOnly', function(value) {
            return /^[0-9]+$/.test(value);
        }, 'Please only enter numeric values (0-9)');
        jQuery.validator.addMethod("lettersonly", function(value) {
            return /^[a-z\s]+$/.test(value);
        }, "Only alphabetical characters");
        jQuery.validator.addMethod("select1", function(value, element) {
            if (element.value == "0") {
                return false;
            } else {
                return true;
            }
        }, "Please select an option.");
        $(function() {
                    $("#login_user").validate({
                                ignore: [],
                                rules: {
                                    password: {
                                        required: true,
                                        minlength: 8,
                                        maxlength: 15
                                    },
                                    emailid: {
                                        required: true, //email:true    }   },  messages:{  password:{  required:"Please enter your password",  minlength:"Password should atleast 8 letter",   maxlength:"Password should not exceed 20 letter"    },  emailid:{   required:"Please enter your email/mobile number"    }   }   }); }); $( ".control-group .input-group select" ).addClass( "form-control" );
    </script>
    <script>
        $.validator.addMethod('numericOnly', function(value) {
            return /^[0-9]+$/.test(value);
        }, 'Please only enter numeric values (0-9)');
        jQuery.validator.addMethod("lettersonly", function(value) {
            return /^[a-z\s]+$/.test(value);
        }, "Only alphabetical characters");
        jQuery.validator.addMethod("select1", function(value, element) {
            if (element.value == "0") {
                return false;
            } else {
                return true;
            }
        }, "Please select an option.");
        $(function() {
            $("#login_user_mobile").validate({
                ignore: [],
                rules: {
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 15
                    },
                    emailid: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    password: {
                        required: "Please enter your password",
                        minlength: "Password should atleast 8 letter",
                        maxlength: "Password should not exceed 20 letter"
                    },
                    emailid: {
                        required: "Please enter your email"
                    }
                }
            });
        });
        $(".control-group .input-group select").addClass("form-control");
    </script>
    <!--plugin for datepicker-->
    <script src="../../code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="../../code.jquery.com/ui/1.11.4/themes/excite-bike/jquery-ui.css">
    <script>
        $(function() {
            $("#when_require").datepicker({
                dateFormat: "dd-mm-yy",
                minDate: 0,
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
    <div class="request-main-content">
        <div class="container bbi-wrap">
            <div class="row">
                <div class="right-side">
                    <div class="ads">
                        <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                        <!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <!-- ads -->
    <div class="tab-widget" >
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
                <div class="widget-main" >
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
                <div class="left-side">
                    <div class="row">
                        <div class="widget-item"> <span class="errspns"> </span>
                            <h2 class="welcome-text">Add a Donation to Patient</h2>
                            <form class="form-horizontal" action="{{URL::to('Donor/donation_store')}}" id="request_blood" method="post" id="request_blood">
                                {{csrf_field()}}
                                <div class="mob-con-border">
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <h3> Patient Details</h3>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Patient Name *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" rel="tooltip" name="patient_name" id="patient_name" value="" title="Please enter Patient Name    Maximum 20 characters."> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Blood Group *</label>
                                                        <div class="input-group">
                                                            <select name="blood" id="blood">
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
                                                    <div class="control-group">
                                                        <label>City *</label>
                                                        <div class="input-group">
                                                            <select name="city_name" id="city_name">
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
                            <option value="Kishoreganj">Kishoreganj</option>                                                   </select>
                                                            <label for="city_name" class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Hospital Name & Address *</label>
                                                        <div class="input-group">
                                                            <textarea type="textarea" class="form-control" rel="tooltip" name="hospital_detail" id="hospital_detail" placeholder="" value="" title="Type your street address here.  Eg: #23, ABC Street"></textarea>
                                                        </div>
                                                    </div>
                                                   
                                               
                                                <div class="control-group">
                                                        <label>Amount of Blood*</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="amount" rel="tooltip" id="doctor_name" value="" title="Plese enter Doctor name"> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Donation Date *</label>
                                                        <!-- <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                                                            <input type="text" class="form-control" rel="tooltip" name="when_require" placeholder="Select" id="when_require" value="" readonly="readonly" title="Select when you need blood"> </div> -->
                                                            <div class="col-md-12">
                                                                <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                                                                <input type="date" class="form-control"  id="when_require" value="" name="date" title="Select when you need blood">
                                                              </div>
                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                <div class="clearfix"></div>
                                <div class="mob-con-border control-group">
                                    <div class="controls">
                                        <div class="g-recaptcha" data-sitekey="6LfTwx0TAAAAAFkCeWGu9nesAY8BeBr9bgfRLtGA"></div>
                                    </div>
                                </div>
                                <br/>
                                <div class="mob-con-border control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox" value="accept" name="accept_terms" /> I am donating blood as my pleasure. </label>
                                    </div>
                                </div>

                                   

                                <div class="mob-con-border control-group">
                                    <div class="controls btn-bbi-group">
                                        <button type="submit" class="btn btn-danger btn-bbi">Add Donation</button>
                                        <br/> </div>
                                        @if(session('msg'))
                                        <div class="alert alert-success">
                                            {{ session('msg')}}
                                        </div>
                                        <script>
                                            alert('successful');
                                        </script>
                                        @endif
                                        
                                        
                                </div>
                            </form>
                        </div>
                        <div class="row"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- request-main-content -->
</body>
<!-- Mirrored from www.bloodbankindia.net/tools/requestblood by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 09:28:56 GMT -->

</html>
<!--<script type="text/javascript"> $(document).ready(function() { $('input[title]').tooltip({trigger: 'focus',placement:'right'}); }) </script> <script> $(document).ready(function(){ $('#blood').tooltip({title:'Please select your Bloodgroup',trigger: 'focus',placement:'right'}); }); </script> <script> $(document).ready(function(){ $('#city_name').tooltip({title:'Please select your City',trigger: 'focus',placement:'right'}); }); </script>-->
<!--include jQuery Validation Plugin-->
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<!--Optional: include only if you are using the extra rules in additional-methods.js -->
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
<script>
    $(function() {
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
        $("#request_blood").validate({
            ignore: [],
            rules: {
                patient_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    lettersonly: true
                },
                blood: {
                    select1: true,
                    required: true,
                },
                city_name: {
                    select1: true,
                    required: true,
                },
                hospital_detail: {
                    required: true
                },
                doctor_name: {
                    required: true
                },
                contact_name: {
                    required: true
                },
                when_require: {
                    required: true
                },
                contact_number: {
                    required: true,
                    minlength: 10
                },
                contact_emailid: {
                    required: true
                },
                accept_terms: {
                    required: true
                }
            },
            messages: {
                patient_name: {
                    required: "Please enter the name",
                    minlength: "Name should atleast 3 letter",
                    maxlength: "Name should not exceed 20 letter",
                    lettersonly: "Name should have only alphabets letter and space "
                },
                blood: {
                    required: "Please select blood group",
                    select1: "Please select blood group"
                },
                city_name: {
                    required: "Please select blood group",
                    select1: "Please select your city"
                },
                hospital_detail: {
                    required: "Please enter hosptal name"
                },
                doctor_name: {
                    required: "Please enter doctor name"
                },
                contact_name: {
                    required: "Please enter contact name"
                },
                when_require: {
                    required: "Please enter the date when blood require"
                },
                contact_number: {
                    required: "Please enter phonenumber",
                    minlength: "Phonenumber not in correct format",
                },
                contact_emailid: {
                    required: "Please enter the email"
                },
                accept_terms: {
                    required: "Please agree"
                }
            }
        });
    });
    $(".control-group .input-group select").addClass("form-control");
</script>
<script>
    $(document).ready(function() {
        $('#request_blood select').select2({
            placeholder: ''
        });
        $('button[data-select2-open]').click(function() {
            $('#' + $(this).data('select2-open')).select2('open');
        });
    });
</script>


@stop