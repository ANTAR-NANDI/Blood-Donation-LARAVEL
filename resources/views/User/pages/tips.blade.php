@extends('User.layouts.defaults')
@section('abc')

<div class="blooddonation-main-content">
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
                <!-- right-side -->
                <div class="left-side">
                    <div class="row">
                        <div class="widget-item">
                            <h2 class="welcome-text">Blood Tips </h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="bloodh1">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood1" aria-expanded="false" aria-controls="blood1"> <h3 style="color: #9F190C;">Beat the myth</h3> </a> </h4> </div>
                                    <div id="blood1" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="bloodh1">
                                        <div class="panel-body">
                                            <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:</p>
                                            <ul>
                                                <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution. </li>
                                                <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form. </li>
                                                <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor. </li>
                                                <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood. </li>
                                                <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided. </li>
                                                <li>Blood will be separated into components within eight hours of donation </li>
                                                <li>The blood will then be taken to the laboratory for testing. </li>
                                                <li>Once found safe, it will be kept in special storage and released when required. </li>
                                                <li>The blood is now ready to be taken to the hospital, to save lives.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood2" aria-expanded="false" aria-controls="collapseTwo"> <h3 style="color: #9F190C;">Blood Groups</h3> </a> </h4> </div>
                                    <div id="blood2" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.</p>
                                            <p>Most humans are in the ABO blood group. The ABO group has four categories namely
                                                <br /> 1) A group 2) B group 3) O group and 4) AB group
                                                <br /> In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.</p>
                                            <p>Thus blood group of any human being will mainly fall in any one of the following groups.
                                                <br /> A positive or A negative
                                                <br /> B positive or B negative
                                                <br /> O positive or O negative
                                                <br /> AB positive or AB negative. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood3" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">Universal Donors and Recipients</h3> </a> </h4> </div>
                                    <div id="blood3" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>The most common blood type is O, followed by type A. </p>
                                            <p>Type O individuals are often called &quot;universal donors&quot; since their blood can be transfused into persons with any blood type. Those with type AB blood are called &quot;universal recipients&quot; because they can receive blood of any type.</p>
                                            <p>However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood4" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">DO donate blood, only if you satisfy all of the following conditions</h3> </a> </h4> </div>
                                    <div id="blood4" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <table border="0" cellspacing="0" cellpadding="5">
                                                <tr>
                                                    <td valign="top"><img src="{{ asset('website/bbi_theme/images/do.png') }}" alt="-" width="10" height="10" /></td>
                                                    <td valign="top">You are between age group of 18-60 years.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top"><img src="{{ asset('website/bbi_theme/images/do.png') }}" alt="-" width="10" height="10" /></td>
                                                    <td valign="top">Your weight is 45 kgs or more.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top"><img src="{{ asset('website/bbi_theme/images/do.png') }}" alt="-" width="10" height="10" /></td>
                                                    <td valign="top">Your hemoglobin is 12.5 gm% minimum.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top"><img src="{{ asset('website/bbi_theme/images/do.png') }}" alt="-" width="10" height="10" /></td>
                                                    <td valign="top">Your last blood donation was 3 or more months earlier.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top"><img src="{{ asset('website/bbi_theme/images/do.png') }}" alt="-" width="10" height="10" /></td>
                                                    <td valign="top">You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood5" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">DO NOT donate blood, if you have any of the following conditions</h3> </a> </h4> </div>
                                    <div id="blood5" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
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
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood6" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">A Healthy Donor</h3> </a> </h4> </div>
                                    <div id="blood6" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
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
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood7" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">Blood Bank</h3> </a> </h4> </div>
                                    <div id="blood7" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p> A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood8" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">About Blood Donation</h3> </a> </h4> </div>
                                    <div id="blood8" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p> Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#blood9" aria-expanded="false" aria-controls="collapseThree"> <h3 style="color: #9F190C;">World Blood Donor Day</h3> </a> </h4> </div>
                                    <div id="blood9" class="panel-collapse-bloodtips collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p> The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- blooddonation-main-content -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#blood1").addClass("in");
                $(".panel-group .panel-default:first-child .panel-heading .panel-title a").removeClass("collapsed");
            }); //  $('#myCollapsible').collapse({ // toggle: false // })
        </script>

@stop