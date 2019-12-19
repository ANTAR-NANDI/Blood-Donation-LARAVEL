@extends('User.layouts.defaults')
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
                                        required: true, //email:true	}	},	messages:{	password:{	required:"Please enter your password",	minlength:"Password should atleast 8 letter",	maxlength:"Password should not exceed 20 letter"	},	emailid:{	required:"Please enter your email/mobile number"	}	}	}); }); $( ".control-group .input-group select" ).addClass( "form-control" );
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
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Sananda Chakraborty </b>&nbsp <i class='fa fa-map-marker'></i>&nbspDurgapur </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp27-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp3 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A- </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=req/2059.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Sananda Chakraborty </b>&nbsp <i class='fa fa-map-marker'></i>&nbspDurgapur </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp27-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp3 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A- </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=req/2058.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>PG Rajendran </b>&nbsp <i class='fa fa-map-marker'></i>&nbspHyderabad, Andhra Pradesh </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp01-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp8 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>AB+ </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=req/2057.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Bipin Bhai Joshi </b>&nbsp <i class='fa fa-map-marker'></i>&nbspAhmedabad </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp30-10-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp9 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A+ </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=req/2056.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.widget-inner -->
                                </div>
                                <!-- /.widget-main -->
                            </div>
                            <div id="RECENT-DONORS" class="tab-pane fade">
                                <div class="widget-main" >
                                    <div class="widget-inner">
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>B+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Shubham Tyagi </b> (Ghaziabad)
                                                <br/> 3 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>B+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Dhruv Ajay Sureka </b> (Mumbai)
                                                <br/> 5 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>A+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Shruthi PK </b> (Bangalore)
                                                <br/> 12 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>O- </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Anand Yadav </b> (Mumbai)
                                                <br/> 1 day ago </div>
                                        </div>
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
                            <h2 class="welcome-text">Request Blood</h2>
                            <form class="form-horizontal" action="https://www.bloodbankindia.net/Tools/request_blood_action" id="request_blood" method="post" id="request_blood">
                                <div class="mob-con-border">
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <h3> Patient Details</h3>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Patient Name *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" rel="tooltip" name="patient_name" id="patient_name" value="" title="Please enter Patient Name	Maximum 20 characters."> </div>
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
                                                                <option value="1">Agartala</option>
                                                                <option value="2">Agra</option>
                                                                <option value="3">Ahmedabad</option>
                                                                <option value="4">Ahmednagar</option>
                                                                <option value="5">Aizwal</option>
                                                                <option value="6">Ajmer</option>
                                                                <option value="7">Akola</option>
                                                                <option value="8">Aligarh</option>
                                                                <option value="9">Allahabad</option>
                                                                <option value="10">Alwar</option>
                                                                <option value="11">Ambala</option>
                                                                <option value="12">Amravati</option>
                                                                <option value="13">Amreli</option>
                                                                <option value="14">Amritsar</option>
                                                                <option value="15">Anand</option>
                                                                <option value="16">Anantapur</option>
                                                                <option value="17">Anklesvar</option>
                                                                <option value="18">Anuppur</option>
                                                                <option value="19">Araria</option>
                                                                <option value="20">Arcot</option>
                                                                <option value="21">Arrah</option>
                                                                <option value="22">Aruppukkottai</option>
                                                                <option value="23">Asansol</option>
                                                                <option value="24">Ashok Nagar</option>
                                                                <option value="25">Aurangabad, Bihar</option>
                                                                <option value="26">Aurangabad, Maharashtra</option>
                                                                <option value="27">Azamgarh</option>
                                                                <option value="28">Bahadurgarh</option>
                                                                <option value="29">Baharampur</option>
                                                                <option value="30">Bahraich</option>
                                                                <option value="31">Balaghat</option>
                                                                <option value="32">Balangir Orissa</option>
                                                                <option value="33">Balasore</option>
                                                                <option value="34">Balia</option>
                                                                <option value="35">Ballabhgarh</option>
                                                                <option value="36">Ballarpur</option>
                                                                <option value="37">Balrampur</option>
                                                                <option value="38">Balurghat West Bengal</option>
                                                                <option value="39">Banda</option>
                                                                <option value="40">Bangalore</option>
                                                                <option value="41">Banganapalle</option>
                                                                <option value="42">Banswara</option>
                                                                <option value="43">Banswara</option>
                                                                <option value="44">Banur</option>
                                                                <option value="45">baran</option>
                                                                <option value="46">Bardhaman</option>
                                                                <option value="47">Bareilly</option>
                                                                <option value="48">Barh</option>
                                                                <option value="49">Baripada</option>
                                                                <option value="50">Barmer</option>
                                                                <option value="51">Barrackpur</option>
                                                                <option value="52">Barwani</option>
                                                                <option value="53">Beawar</option>
                                                                <option value="54">Belgaum</option>
                                                                <option value="55">Bellary</option>
                                                                <option value="56">Bengaluru</option>
                                                                <option value="57">Betul</option>
                                                                <option value="58">Bhagalpur</option>
                                                                <option value="59">Bhandara</option>
                                                                <option value="60">Bharatpur</option>
                                                                <option value="61">Bharuch</option>
                                                                <option value="62">Bhavani</option>
                                                           
                                                            <option value="64">Bhavnagar</option>
                                                                                                                          </select>
                                                            <label for="city_name" class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Hospital Name & Address *</label>
                                                        <div class="input-group">
                                                            <textarea type="textarea" class="form-control" rel="tooltip" name="hospital_detail" id="hospital_detail" placeholder="" value="" title="Type your street address here.	Eg: #23, ABC Street"></textarea>
                                                        </div>
                                                    </div>
                                                   
                                               
                                                <div class="control-group">
                                                        <label>Amount of Blood*</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="doctor_name" rel="tooltip" id="doctor_name" value="" title="Plese enter Doctor name"> </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <h3> Contact Details</h3>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Contact Name *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" rel="tooltip" name="contact_name" id="contact_name" value="" title="Enter Contact Name"> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Contact Email ID *</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" placeholder="" rel="tooltip" name="contact_emailid" id="contact_emailid" value="" title="Enter Contact Email_Id"> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Contact Number *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="contact_number" id="contact_number" rel="tooltip" placeholder="" value="" title="Enter Contact Number"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Other Message</label>
                                                        <div class="input-group">
                                                            <textarea type="textarea" class="form-control" name="other_mess" id="other_mess" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>When Required *</label>
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
                                            <input type="checkbox" value="accept" name="accept_terms" /> I agree to have my contact details broadcasted to the registered donors of BloodBankIndia.net </label>
                                    </div>
                                </div>

                                   

                                <div class="mob-con-border control-group">
                                    <div class="controls btn-bbi-group">
                                        <button type="submit" class="btn btn-danger btn-bbi">Submit Request</button>
                                        <br/> </div>
                                        
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