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
                <div class="tab-widget">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#BLOOD-REQUESTS">BLOOD <span>REQUESTS</span></a></li>
                        <li><a href="#RECENT-DONORS">RECENT <span>DONORS</span></a></li>
                        <li><a href="#QUICK">QUICK <span>TIP</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="BLOOD-REQUESTS" class="tab-pane fade in active">
                            <div class="widget-main">
                                <!-- <div class="widget-main-title"> <h4 class="widget-title">Blood Requests</h4> </div> -->
                                <!-- widget-main-title -->
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
                                                <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2059.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
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
                                                <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2058.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
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
                                                <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2057.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
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
                                                <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2056.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-inner -->
                            </div>
                            <!-- /.widget-main -->
                        </div>
                        <div id="RECENT-DONORS" class="tab-pane fade">
                            <div class="widget-main">
                                <!-- <div class="widget-main-title"> <h4 class="widget-title">Recent Donors</h4> </div> -->
                                <!-- /.widget-main-title -->
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
            <!-- right-side -->
            <div class="left-side">
                <div class="row">
                    <div class="login-widget-item">
                        <h2 class="welcome-text">Privacy Policy</h2>
                        <p>The BloodBankIndia.net team is committed to protecting the rights of all visitors to our website. We recognize our obligation to keep personal information secure and have created this privacy statement to share our information gathering and dissemination practices for this website. We also assure you that none of your registered information will be shared with any third parties outside the BloodBankIndia.net or the parent company uSiS Technologies. However, the information that you have agreed to broadcast during the process of registration will be available for the public view. </p>
                        <h3>Collection and Use of On-line Information </h3>
                        <p>Our web server automatically collects your IP address when you visit our site. (Your IP address is your computer's unique address that lets other computers attached to the Internet know where to send data, but does not identify you individually). We use your IP address to help diagnose problems with our server and to compile statistics on site usage. We do not make your IP address available to anyone. From time to time, we may also use cookies on your web browser to store some of the user preference, this cookie will communicate only with this website and if you wish not have them saved, you may have them deleted from your computer using your browser&rsquo;s settings. When you visit certain areas of this site including the registration form, you may be asked to provide personal information (such as name, address, e-mail address, and phone number) that we need to process your request. In the event that you decline to provide such information, we will be unable to process your request. Still, we invite you to continue to visit the site and take advantage of the wealth of information it offers. Every site user who provides us with personal information has the right to inspect, amend, or correct his/her own personal information. You may do so either online by logging in, if you are a registered user, or through simply contacting us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                        <h3>Other Websites, Links and Resources </h3>
                        <p>This privacy policy extends to this website (<a href="../index.html">www.bloodbankindia.net</a>) only. If you link to another individual or entity's website through our website or re-directed from our website, you should read the privacy policy specific to that website to determine their practices. If you have any questions or concerns about the online policy for this site or its implementation you may contact us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                        <h3>Terms of use </h3>
                        <p>This is purely a non-profit website directed towards the welfare of our community. Any individual or entity that enrolls for our service does so with his/her own will and at no obligation to any one else or any other entity. We seriously condemn the use of this website for any commercial purpose, including solicitation for commercial gain based on the contact details posted by the registered users. We take the privacy of our users very seriously and therefore reserve the right to pursue a legal action against the individuals or entities violating our terms of use. </p>
                        <h3>Use of Donations</h3>
                        <p> We do accept funds in form of donation from those who volunteer themselves to do so; such funds collected will be used for running blood camps at select locations and for covering the part of the administrative expenses at running the website. </p>
                        <h3>Complaints Procedure </h3>
                        <p>Anyone who experiences a problem with the service provided by BloodBankIndia.net should raise the matter directly using our online contact us form, giving sufficient information to locate the material (such as an url) and clearly outlining the grounds for complaint. BloodBankIndia.net team will approach the individual responsible for the material in question with a view to resolving the matter to the satisfaction of the complainant. The formal complaints procedure should only be used where the complainant feels that the nature of the complaint is too serious to be dealt with informally, or where a satisfactory conclusion has not been reached after following the informal procedure. A formal complaint should be made in writing to BloodBankIndia.net team, who will acknowledge receipt and ensure that the matter is looked into at the earliest possible. An initial response to any complaint can be expected within seven days of its receipt; a full and considered response to the complaint should be completed within 30 days and any subsequent remedy implemented with the minimum of delay.</p>
                    </div>
                    <!-- widget-item -->
                </div>
                <!-- row -->
            </div>
            <!-- leftside -->
        </div>
        <!-- row -->
    </div>
@stop