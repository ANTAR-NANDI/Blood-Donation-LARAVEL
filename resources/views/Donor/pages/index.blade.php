@extends('Donor.layouts.defaults')
@section('abc')




    <div class="main-search-blood-donors">
        <div class="search-blood-donors">
            <div class="container">
                <div class="row">
                    <div class="search-blood-left">
                        <h1>Search Blood Donors</h1>
                        <div class="search-box"> <span class="errspns"> </span>
                            <form class="form-horizontal" method="post" action="{{URL::to('Donor/search_blood')}}" id="search">
                                <ul class="nav nav-pills">
                                     {{csrf_field()}}
                                    <li class="search-bloodgroup">
                                        <label>Blood Group *</label>
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
                                    </li>
                                    <li class="search-city">
                                        <label>City *</label>
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
                            <option value="Kishoreganj">Kishoreganj</option>
                                           
                                        </select>
                                        <label for="city_name" class="error"></label>
                                    </li>
                                    <li class="search-submit-block">
                                        <button type="submit" class="search-btn hvr-bounce-to-bottom-2 m1-2"> <span class="desktop-show">Search</span> <span class="mobile-show"><i class="fa fa-search"></i></span> </button>
                                    </li>
                                </ul>
                                <label class="checkbox">
                                    <input type="checkbox" value="" id="accept_condition" name="accept_condition" class="error"> <span class="agree-text">I have read and agree to abide by the <a href="#" data-toggle="modal" data-target="#myModal-terms" style="color:#fff;">terms and conditions</a> </span> </label>
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
                                                                    <p>This privacy policy extends to this website (<a href="index.html">www.bloodbankindia.net</a>) only. If you link to another individual or entity's website through our website or re-directed from our website, you should read the privacy policy specific to that website to determine their practices. If you have any questions or concerns about the online policy for this site or its implementation you may contact us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
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
                                <!-- <div class="line"> <img src="bbi_theme/images/banner-border.png" alt="Blood Bank India Banner arrow" /> </div> -->
                                <hr>
                                
                            </form>
                            <div class="search-blood-banner">
                                <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                                <!-- BBI-Mobile --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3218462307754388" data-ad-slot="7278602188" data-ad-format="link"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                        <!-- search-box -->
                    </div>
                    <!-- search-blood-left -->
                    <div class="search-blood-right">
                        <!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <div class="counters-bg">
            <div id="counters">
                <div class="container">
                    <div class="row">
                        <div class="blood-donors">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-1.png') }}" alt="Blood Donors in Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter1">0</span><span>+</span>
                                <p>Blood Donors</p>
                            </div>
                        </div>
                        <div class="blood-request">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-2.png') }}" alt="Blood Requests to Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter2">0</span><span>+</span>
                                <p>Blood Requests</p>
                            </div>
                        </div>
                        <div class="active-donors">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-3.png') }}" alt="Active Donors in Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter3">0</span><span>+</span>
                                <p>Active Donors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- counters-bg -->
        <div id="widget-main-info">
            <div class="container">
                <div class="row">
                    <div class="row2">
                        <div class="widget-content widget-sms">
                            <h2>Blood Donate Tips</h2>
                            <div class="smartmarquee-content">
                                <div class="smartmarquee example">
                                    <ul class="container">
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>WHAT YOU SHOULD EAT BEFORE DONATING BLOOD</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
                                                </div>
                                                <table border="0" cellpadding="5" cellspacing="0" class="ULtable">
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="bbi_theme/images/arrow.jpg" width="8" height="5" alt="Next arrow blood bank india" /></td>
                                                            <td>Low fat foods</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="bbi_theme/images/arrow.jpg" width="8" height="5" alt=" nextarrow blood bank india" /></td>
                                                            <td>Iron rich foods</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>Beat the myth</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>This is what you can expect when you are ready to donate blood:</p>
                                                </div>
                                                <ul>
                                                    <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</li>
                                                </ul>
                                                <div class="sub-content-1">
                                                    <p><a href="information/blooddonationtips.html">(And More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>Blood Groups</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>blood group of any human being will mainly fall in any one of the following groups. </p>
                                                </div>
                                                <ul>
                                                    <li>A positive or A negative </li>
                                                    <li>B positive or B negative </li>
                                                    <li>O positive or O negative </li>
                                                    <li>AB positive or AB negative.</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>Universal Donors and Recipients</h4> </div>
                                                <div class="sub-content">
                                                    <p>The most common blood type is O, followed by type A.</p>
                                                    <p>Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
                                                    <p><a href="information/blooddonationtips.html">(Read More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>Do donate blood,</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>Only if you satisfy all of the following conditions</p>
                                                </div>
                                                <ul>
                                                    <li>You are between age group of 18-60 years.</li>
                                                    <li>Your weight is 45 kgs or more.</li>
                                                    <li>Your last blood donation was 3 or more months earlier.</li>
                                                </ul>
                                                <div class="sub-content-1">
                                                    <p><a href="information/blooddonationtips.html">(And More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>Do NOT donate blood,</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>If you have any of the following conditions</p>
                                                </div>
                                                <ul>
                                                    <li>Cold / fever in the past 1 week.</li>
                                                    <li>Under treatment with antibiotics or any other medication.</li>
                                                    <li>Major surgery in the last 6 months.</li>
                                                    <li>Vaccination in the last 24 hours.</li>
                                                </ul>
                                                <div class="sub-content-1">
                                                    <p><a href="information/blooddonationtips.html">(And More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-bloodrequest">
                            <h2>Blood Requests</h2>
                            <div class="widget-bloodrequest-content scrollpar" id="style-2">
                                 @foreach($request as $r)
                                <div class='blood-req-widget'>

                                 
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
                        </div>
                        <div class="widget-content widget-recentdonors">
                            <h2>Recent Donors</h2>
                            <div class="widget-recentdonors-content">
                                 @foreach($donor as $d)
                                <div class='blood-req-widget'>
                                    <div class='rec-b-group'>{{$d->blood}} </div>
                                    <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>{{$d->fullname}} </b> ({{$d->city}})
                                        <br/>{{$d->updated_at}}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- main-search-blood-donors -->
    <script type="text/javascript">
        function viewTerms() {
            window.open("information/privacy_policy.html", 'DonorTerms', 'width=500,height=600,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
        }
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
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
            $("#search").validate({
                ignore: [],
                rules: {
                    blood: {
                        select1: true,
                        required: true
                    },
                    city_name: {
                        select1: true,
                        required: true
                    },
                    accept_condition: {
                        required: true
                    }
                },
                messages: {
                    blood: {
                        required: "Please select your blood group"
                    },
                    city_name: {
                        required: "Please select your city",
                        select1: "Please select your city"
                    },
                    accept_condition: {
                        required: "Please agree the terms and conditions to proceed"
                    }
                }
            });
        });
        $(".control-group .input-group select").addClass("form-control");
    </script>
    <script>
        var donor = "{{$count}}";
        var request = "{{$count1}}";
        var active = "{{$count2}}";
        console.log(donor);
        setTimeout(function() {
            $('.meter1').html(donor);
            $('.meter2').html(request);
            $('.meter3').html(active);
        }, 1500);
    </script>
    <script language="javascript">
        $(document).ready(function() {
            $(".smartmarquee").smartmarquee();
        });
    </script>
    <!-- begin The Footer -->
    

   









@stop