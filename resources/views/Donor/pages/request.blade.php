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
                                                                <option value="63">Bhavnagar</option>
                                                                <option value="64">Bhilai Nagar</option>
                                                                <option value="65">Bhimavaram</option>
                                                                <option value="66">Bhiwandi</option>
                                                                <option value="67">Bhopal</option>
                                                                <option value="68">Bhubaneswar</option>
                                                                <option value="69">Bhuj</option>
                                                                <option value="70">Bidar</option>
                                                                <option value="71">Bihar Sharif</option>
                                                                <option value="72">Bijnaur, UP</option>
                                                                <option value="73">Bikaner</option>
                                                                <option value="74">Bilaspur, Chhattisgarh</option>
                                                                <option value="75">Bilaspur, Himachal Pradesh</option>
                                                                <option value="76">Bilgha, Punjab</option>
                                                                <option value="77">Bodh Gaya</option>
                                                                <option value="78">Bokaro Steel City</option>
                                                                <option value="79">Bongaigaon</option>
                                                                <option value="80">Bulandshahr</option>
                                                                <option value="81">Buldana</option>
                                                                <option value="82">Burhanpur</option>
                                                                <option value="83">Buxar</option>
                                                                <option value="84">Cambay</option>
                                                                <option value="85">Caryobys</option>
                                                                <option value="86">Chamoli Gopeshwar</option>
                                                                <option value="87">Champawat</option>
                                                                <option value="88">Chamrajnagar</option>
                                                                <option value="89">Chandannagar</option>
                                                                <option value="90">Chandigarh</option>
                                                                <option value="91">Chandrapur</option>
                                                                <option value="92">Chapra</option>
                                                                <option value="93">Charkhari</option>
                                                                <option value="94">Chengalpattu</option>
                                                                <option value="95">Chennai</option>
                                                                <option value="96">Chhatarpur</option>
                                                                <option value="97">Chhindwara</option>
                                                                <option value="98">Chikmagalur</option>
                                                                <option value="99">Chiplun</option>
                                                                <option value="100">Chitradurga</option>
                                                                <option value="101">Chitrakoot Dham Karwi</option>
                                                                <option value="102">Chittoor</option>
                                                                <option value="103">Coimbatore</option>
                                                                <option value="104">Contai</option>
                                                                <option value="105">Coonoor</option>
                                                                <option value="106">Cuddalore</option>
                                                                <option value="107">Cuddapah</option>
                                                                <option value="108">Cuttack</option>
                                                                <option value="109">Dabra</option>
                                                                <option value="110">Dadra</option>
                                                                <option value="111">Dahod</option>
                                                                <option value="112">Daksh</option>
                                                                <option value="113">Daltonganj</option>
                                                                <option value="114">Daman</option>
                                                                <option value="115">Damoh</option>
                                                                <option value="116">Darbhanga</option>
                                                                <option value="117">Darjeeling</option>
                                                                <option value="118">Datia</option>
                                                                <option value="119">Davanagere</option>
                                                                <option value="120">Dehgam</option>
                                                                <option value="121">Dehradun</option>
                                                                <option value="122">Delhi</option>
                                                                <option value="123">Deoghar</option>
                                                                <option value="124">Dewas</option>
                                                                <option value="125">Dhanbad</option>
                                                                <option value="126">Dhar</option>
                                                                <option value="127">Dharampur</option>
                                                                <option value="128">Dharamsala</option>
                                                                <option value="129">Dharwad</option>
                                                                <option value="130">Dholka</option>
                                                                <option value="131">Dhule</option>
                                                                <option value="132">Dhulian</option>
                                                                <option value="133">Dibrugarh</option>
                                                                <option value="134">Dindigul</option>
                                                                <option value="135">Dispur</option>
                                                                <option value="136">Diu</option>
                                                                <option value="137">Diu</option>
                                                                <option value="138">Dombivli</option>
                                                                <option value="139">Duhbai</option>
                                                                <option value="140">Dumdum</option>
                                                                <option value="141">Durg</option>
                                                                <option value="142">Durgapur</option>
                                                                <option value="143">Dwarka</option>
                                                                <option value="144">Ernakulam</option>
                                                                <option value="145">Erode</option>
                                                                <option value="146">Etah</option>
                                                                <option value="147">Etawah</option>
                                                                <option value="148">Faizabad</option>
                                                                <option value="149">Faridabad</option>
                                                                <option value="150">Faridkot</option>
                                                                <option value="151">Farrukhabad</option>
                                                                <option value="152">Fatehgarh</option>
                                                                <option value="153">Fatehpur Sikri</option>
                                                                <option value="154">Ferozepur Cantt.</option>
                                                                <option value="155">Ferozepur City</option>
                                                                <option value="156">Firozabad</option>
                                                                <option value="157">Gadchiroli</option>
                                                                <option value="158">Gandhinagar</option>
                                                                <option value="159">Gangtok</option>
                                                                <option value="160">Ganjam</option>
                                                                <option value="161">Garcha, Punjab</option>
                                                                <option value="162">Gaya</option>
                                                                <option value="163">Ghaziabad</option>
                                                                <option value="164">Ghazipur</option>
                                                                <option value="165">Goa Velha</option>
                                                                <option value="166">Godhra</option>
                                                                <option value="167">Gondiya</option>
                                                                <option value="168">Gorakhpur</option>
                                                                <option value="169">Greater Noida</option>
                                                                <option value="170">Gudalur</option>
                                                                <option value="171">Gudivada</option>
                                                                <option value="172">Gulbarga</option>
                                                                <option value="173">Gumla</option>
                                                                <option value="174">Guna</option>
                                                                <option value="175">Gundlupet</option>
                                                                <option value="176">Guntur</option>
                                                                <option value="177">Gurgaon</option>
                                                                <option value="178">Guruharsahai</option>
                                                                <option value="179">Guwahati</option>
                                                                <option value="180">Gwalior</option>
                                                                <option value="181">Gwalior</option>
                                                                <option value="182">Haldia</option>
                                                                <option value="183">Haldwani</option>
                                                                <option value="184">Hamir, Uttar Pradesh</option>
                                                                <option value="185">Hamirpur, Himachal Pradesh</option>
                                                                <option value="186">Hansi</option>
                                                                <option value="187">Hanumangarh</option>
                                                                <option value="188">Harda</option>
                                                                <option value="189">Haridwar</option>
                                                                <option value="190">Harsawa</option>
                                                                <option value="191">Hassan</option>
                                                                <option value="192">Hastinapur</option>
                                                                <option value="193">Hathras</option>
                                                                <option value="194">Hatigudda, Karnataka</option>
                                                                <option value="195">Himatnagar</option>
                                                                <option value="196">hindupur</option>
                                                                <option value="197">Hisar</option>
                                                                <option value="198">Hoshiarpur</option>
                                                                <option value="199">Howrah</option>
                                                                <option value="200">Hubli</option>
                                                                <option value="201">Hyderabad, Andhra Pradesh</option>
                                                                <option value="202">Indore</option>
                                                                <option value="203">Irinjalakuda</option>
                                                                <option value="204">Jabalpur</option>
                                                                <option value="205">Jagraon</option>
                                                                <option value="206">Jagtial</option>
                                                                <option value="207">Jaipur</option>
                                                                <option value="208">Jais</option>
                                                                <option value="209">Jaisalmer</option>
                                                                <option value="210">Jalalabad</option>
                                                                <option value="211">Jalandhar</option>
                                                                <option value="212">Jalgaon</option>
                                                                <option value="213">Jammu</option>
                                                                <option value="214">Jamnagar</option>
                                                                <option value="215">Jamshedpur</option>
                                                                <option value="216">Jaunpur</option>
                                                                <option value="217">Jhabua</option>
                                                                <option value="218">Jhalawar</option>
                                                                <option value="219">Jhansi</option>
                                                                <option value="220">Jhunjhunu</option>
                                                                <option value="221">Jodhpur</option>
                                                                <option value="222">Jorhat</option>
                                                                <option value="223">Junagadh</option>
                                                                <option value="224">Kakinada</option>
                                                                <option value="225">Kalimpong</option>
                                                                <option value="226">Kalwa</option>
                                                                <option value="227">Kalyan-Dombivali</option>
                                                                <option value="228">Kalyani</option>
                                                                <option value="229">Kanauj</option>
                                                                <option value="230">Kancheepuram</option>
                                                                <option value="231">Kandla</option>
                                                                <option value="232">Kangazha</option>
                                                                <option value="233">Kannur</option>
                                                                <option value="234">Kanpur</option>
                                                                <option value="235">Kanyakumari</option>
                                                                <option value="236">Karaikal</option>
                                                                <option value="237">Karaikudi</option>
                                                                <option value="238">Karamsad</option>
                                                                <option value="239">Karimnagar</option>
                                                                <option value="240">Karjat</option>
                                                                <option value="241">Karnal</option>
                                                                <option value="242">Karur</option>
                                                                <option value="243">Karwar</option>
                                                                <option value="244">Kavaratti</option>
                                                                <option value="245">Khamanon</option>
                                                                <option value="246">Khammam</option>
                                                                <option value="247">Khandwa</option>
                                                                <option value="248">Khanna</option>
                                                                <option value="249">Kharagpur</option>
                                                                <option value="250">Khargone</option>
                                                                <option value="251">Kheda</option>
                                                                <option value="252">Khilchipur</option>
                                                                <option value="253">Khopoli</option>
                                                                <option value="254">Khuldabad</option>
                                                                <option value="255">Kirandul</option>
                                                                <option value="256">Kochi</option>
                                                                <option value="257">Kohima</option>
                                                                <option value="258">Kokrajhar</option>
                                                                <option value="259">Kolar</option>
                                                                <option value="260">Kolhapur</option>
                                                                <option value="261">Kolkata</option>
                                                                <option value="262">Kollam</option>
                                                                <option value="263">Konark</option>
                                                                <option value="264">Korba</option>
                                                                <option value="265">Kota</option>
                                                                <option value="266">Kotdwara</option>
                                                                <option value="267">Kothagudem</option>
                                                                <option value="268">Kothamangalam</option>
                                                                <option value="269">Kottarakara</option>
                                                                <option value="270">Kottayam</option>
                                                                <option value="271">Kovilpatti</option>
                                                                <option value="272">Koyampattur</option>
                                                                <option value="273">Kozhencherry</option>
                                                                <option value="274">Kozhikode</option>
                                                                <option value="275">Krishnagiri</option>
                                                                <option value="276">Kulpahar</option>
                                                                <option value="277">Kumbakonam</option>
                                                                <option value="278">Kumbhraj</option>
                                                                <option value="279">Kurnool</option>
                                                                <option value="280">kurukshetra]</option>
                                                                <option value="281">Kushinagar</option>
                                                                <option value="282">Lalitpur</option>
                                                                <option value="283">Lamka</option>
                                                                <option value="284">Leh</option>
                                                                <option value="285">Leh</option>
                                                                <option value="286">Lucknow</option>
                                                                <option value="287">Ludhiana</option>
                                                                <option value="288">Machilipatnam</option>
                                                                <option value="289">Madanapalle</option>
                                                                <option value="290">Madgaon</option>
                                                                <option value="291">Madikeri</option>
                                                                <option value="292">Madurai</option>
                                                                <option value="293">Mahabaleswar</option>
                                                                <option value="294">Mahabubnagar</option>
                                                                <option value="295">Mahad</option>
                                                                <option value="296">Mahe</option>
                                                                <option value="297">Mahoba</option>
                                                                <option value="298">Mahwa</option>
                                                                <option value="299">Malout</option>
                                                                <option value="300">Mandsaur</option>
                                                                <option value="301">Mangalagiri</option>
                                                                <option value="302">Mangalore</option>
                                                                <option value="303">Mapusa</option>
                                                                <option value="304">Marmagao</option>
                                                                <option value="305">Mathura</option>
                                                                <option value="306">Meerut</option>
                                                                <option value="307">Melattur</option>
                                                                <option value="308">Mirzapur</option>
                                                                <option value="309">Moga</option>
                                                                <option value="310">Mohali</option>
                                                                <option value="311">Mokama</option>
                                                                <option value="312">Moradabad</option>
                                                                <option value="313">Motihari</option>
                                                                <option value="314">Mount Abu</option>
                                                                <option value="315">Mukatsar</option>
                                                                <option value="316">Mullanpur</option>
                                                                <option value="317">Mumbai</option>
                                                                <option value="318">Murshidabad</option>
                                                                <option value="319">Murwara</option>
                                                                <option value="320">Mussoorie</option>
                                                                <option value="321">Muzaffarnagar</option>
                                                                <option value="322">Muzaffarpur</option>
                                                                <option value="323">Mysore</option>
                                                                <option value="324">Nadiad</option>
                                                                <option value="325">Nagapattinam</option>
                                                                <option value="326">Nagarkurnool</option>
                                                                <option value="327">Nagercoil</option>
                                                                <option value="328">Nagina, UP</option>
                                                                <option value="329">Nagpur</option>
                                                                <option value="330">Nainital</option>
                                                                <option value="331">Nalgonda</option>
                                                                <option value="332">Nanded</option>
                                                                <option value="333">Nandurbar</option>
                                                                <option value="334">Nandyal</option>
                                                                <option value="335">Nanital</option>
                                                                <option value="336">Narasaraopet</option>
                                                                <option value="337">Narnol</option>
                                                                <option value="338">Narsimhapur</option>
                                                                <option value="339">Narsinghgarh</option>
                                                                <option value="340">Nashik</option>
                                                                <option value="341">Navi Mumbai</option>
                                                                <option value="342">Navsari</option>
                                                                <option value="343">Nawalgarh</option>
                                                                <option value="344">Neemuch</option>
                                                                <option value="345">Nellore</option>
                                                                <option value="346">New Delhi* or Delhi</option>
                                                                <option value="347">New Guntur</option>
                                                                <option value="348">Nizamabad</option>
                                                                <option value="349">NOIDA</option>
                                                                <option value="350">Nurmahal, Punjab</option>
                                                                <option value="351">Nurpur, Himachal Pradesh</option>
                                                                <option value="352">Palghat</option>
                                                                <option value="353">Palwal</option>
                                                                <option value="354">Panaji</option>
                                                                <option value="355">Panchkula</option>
                                                                <option value="356">Pandharpur</option>
                                                                <option value="357">Panipat</option>
                                                                <option value="358">Panna</option>
                                                                <option value="359">Panvel</option>
                                                                <option value="360">Pasla, Punjab</option>
                                                                <option value="361">Patan</option>
                                                                <option value="362">Pathankot</option>
                                                                <option value="363">Patiala</option>
                                                                <option value="364">Patna</option>
                                                                <option value="365">Patratu,Jharkhand</option>
                                                                <option value="366">Pimpri Chinchwad</option>
                                                                <option value="367">Ponda</option>
                                                                <option value="368">Porbandar</option>
                                                                <option value="369">Port Blair</option>
                                                                <option value="370">Pratapgarh</option>
                                                                <option value="371">Puducherry</option>
                                                                <option value="372">Punalur</option>
                                                                <option value="373">Pune</option>
                                                                <option value="374">Puri</option>
                                                                <option value="375">Pushkar</option>
                                                                <option value="376">Quilon</option>
                                                                <option value="377">Rae Bareli</option>
                                                                <option value="378">Raichur</option>
                                                                <option value="379">Raigarh</option>
                                                                <option value="380">Raipur</option>
                                                                <option value="381">Raisen</option>
                                                                <option value="382">Rajahmundry</option>
                                                                <option value="383">Rajampet</option>
                                                                <option value="384">Rajgarh</option>
                                                                <option value="385">Rajkot</option>
                                                                <option value="386">Rajnandgaon</option>
                                                                <option value="387">Rajsthan</option>
                                                                <option value="388">Ramanathapuram</option>
                                                                <option value="389">Rameshwaram</option>
                                                                <option value="390">Rampur</option>
                                                                <option value="391">Ranchi</option>
                                                                <option value="392">Rangapara</option>
                                                                <option value="393">Ranikhet</option>
                                                                <option value="394">Rasheed</option>
                                                                <option value="395">Ratangarh</option>
                                                                <option value="396">Ratlam</option>
                                                                <option value="397">Ratnagiri</option>
                                                                <option value="398">Raurkela</option>
                                                                <option value="399">Ravulapalem</option>
                                                                <option value="400">Rewa</option>
                                                                <option value="401">Ringawa</option>
                                                                <option value="402">Rishikesh</option>
                                                                <option value="403">Roorkee</option>
                                                                <option value="404">Sagars</option>
                                                                <option value="405">Saharanpur</option>
                                                                <option value="406">Salem</option>
                                                                <option value="407">Samastipur</option>
                                                                <option value="408">Sanawad</option>
                                                                <option value="409">Sangamner</option>
                                                                <option value="410">Sangli</option>
                                                                <option value="411">Satara</option>
                                                                <option value="412">Sathyamangalam</option>
                                                                <option value="413">Satna</option>
                                                                <option value="414">Sehore</option>
                                                                <option value="415">Seoni</option>
                                                                <option value="416">Shajapur</option>
                                                                <option value="417">Shegaon</option>
                                                                <option value="418">Sheopur</option>
                                                                <option value="419">Shevgaon</option>
                                                                <option value="420">Shillong</option>
                                                                <option value="421">Shimla</option>
                                                                <option value="422">Shimoga</option>
                                                                <option value="423">Shirala</option>
                                                                <option value="424">Shivani</option>
                                                                <option value="425">Shivpuri</option>
                                                                <option value="426">Shoaib</option>
                                                                <option value="427">Sholapur</option>
                                                                <option value="428">shrigonda</option>
                                                                <option value="429">shrirampur</option>
                                                                <option value="430">Siddipet</option>
                                                                <option value="431">Sikar</option>
                                                                <option value="432">Silchar</option>
                                                                <option value="433">Siliguri</option>
                                                                <option value="434">Silvassa</option>
                                                                <option value="435">Sindhanur</option>
                                                                <option value="436">Singrauli</option>
                                                                <option value="437">Sirohi</option>
                                                                <option value="438">Sironj</option>
                                                                <option value="439">Sitamarhi</option>
                                                                <option value="440">Sitapur</option>
                                                                <option value="441">Siwan</option>
                                                                <option value="442">Sonipat</option>
                                                                <option value="443">Sriganganagar</option>
                                                                <option value="444">Srikakulam</option>
                                                                <option value="445">Srinagar</option>
                                                                <option value="446">Surat</option>
                                                                <option value="447">Suratgarh</option>
                                                                <option value="448">Surendranagar</option>
                                                                <option value="449">Tamluk</option>
                                                                <option value="450">Tandur</option>
                                                                <option value="451">Tenali</option>
                                                                <option value="452">Thane</option>
                                                                <option value="453">Thanjavur</option>
                                                                <option value="454">Thathawata</option>
                                                                <option value="455">Thiruvallur</option>
                                                                <option value="456">Thiruvananthapuram</option>
                                                                <option value="457">Thoothukudi,</option>
                                                                <option value="458">Thrikkannamangal</option>
                                                                <option value="459">Thrissur</option>
                                                                <option value="460">Tikamgarh</option>
                                                                <option value="461">Tinsukia</option>
                                                                <option value="462">Tiruchirappalli</option>
                                                                <option value="463">Tirunelveli</option>
                                                                <option value="464">Tirupathi</option>
                                                                <option value="465">Tirupattur</option>
                                                                <option value="466">Tirupur</option>
                                                                <option value="467">Tiruvarur</option>
                                                                <option value="468">Tzudikong</option>
                                                                <option value="469">Udaipur in Rajasthan</option>
                                                                <option value="470">Udaipur in Tripura</option>
                                                                <option value="471">Udhagamandalam</option>
                                                                <option value="472">Udhampur in Jammu & Kashmir</option>
                                                                <option value="473">Udupi</option>
                                                                <option value="474">Ujjain</option>
                                                                <option value="475">Ulhasnagar</option>
                                                                <option value="476">Unnao</option>
                                                                <option value="477">Uttarpara in West Bengal</option>
                                                                <option value="478">Vadodara</option>
                                                                <option value="479">Vallabh Vidhyanagar</option>
                                                                <option value="480">Valsad</option>
                                                                <option value="481">Vandavasi</option>
                                                                <option value="482">Vapi</option>
                                                                <option value="483">Varanasi</option>
                                                                <option value="484">Vasai</option>
                                                                <option value="485">Vasco da Gama, Goa</option>
                                                                <option value="486">Vellore</option>
                                                                <option value="487">Vidisha</option>
                                                                <option value="488">Vijayawada</option>
                                                                <option value="489">Viluppuram</option>
                                                                <option value="490">Virar</option>
                                                                <option value="491">Virudhachalam</option>
                                                                <option value="492">Visakhapatnam</option>
                                                                <option value="493">Vizianagaram</option>
                                                                <option value="494">Vyara</option>
                                                                <option value="495">Wani</option>
                                                                <option value="496">Warangal</option>
                                                                <option value="497">Wardha</option>
                                                                <option value="498">Wayanad</option>
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
                                                        <label>Doctor Name *</label>
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
                                                        <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                                                            <input type="text" class="form-control" rel="tooltip" name="when_require" placeholder="Select" id="when_require" value="" readonly="readonly" title="Select when you need blood"> </div>
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