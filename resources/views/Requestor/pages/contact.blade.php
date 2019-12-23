@extends('Requestor.layouts.defaults')
@section('abc')

 <div class="contactus-main-content">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-map row">
                            <h2 class="welcome-text">Contact Us</h2>
                            <form class="form-horizontal" method="post" action="{{ URL::to('contactstore') }}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <label>Full Name *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" rel="tooltip" value="" name="name"> </div>
                                                <span>{{ $errors->first('name') }}</span>
                                        </div>
                                        <div class="control-group">
                                            <label>Email ID * </label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="" rel="tooltip" name="email"  value=""> 
                                            </div>
                                            <span>{{ $errors->first('email') }}</span>
                                        </div>
                                        <div class="control-group">
                                            <label>Mobile No </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="mobile" rel="tooltip" placeholder="" value=""> 
                                            </div>
                                             <span>{{ $errors->first('mobile') }}</span>
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
                                                                
                                                                
                                                                
                                                            </select>
                                                            <label for="city_name" class="error"></label>
                                                        </div>
                                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group width-s">
                                            <label>Query Subject</label>
                                            <div class="input-group">
                                                <select name="query1">
                                                    <option value="Select">Select</option>
                                                    <option value="Helpline">Helpline</option>
                                                    <option value="Media/Marketing">Media/Marketing</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group width-s">
                                            <label>Message *</label>
                                            <div class="input-group">
                                                <textarea style="height:100px" type="textarea" class="form-control" rel="tooltip" name="message" placeholder="" value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="g-recaptcha" data-sitekey="6LfTwx0TAAAAAFkCeWGu9nesAY8BeBr9bgfRLtGA"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-danger btn-bbi">Send</button> <span style="margin-left: 15px;" class="required-span"><sup>*</sup>fields are required</span>
                                        <br/> </div>

                                         @if(session('msg'))
                                        <div class="alert alert-success">
                                            {{ session('msg')}}
                                        </div>
                                        @endif
                                        
                                </div>
                            </form>
                        </div>
                        <!-- col-md-7 -->
                    </div>
                    <!-- contact-map -->
                    <div class="col-md-4">
                        <div class="contact-page-content">
                            <!-- <div class="contact-heading"> <h3>Our Contact Details</h3> </div> <address>    Any enquiry please write us to info@bloodbankindia.net or fill up this contact form.    We will get back to you soon. </address> -->
                            <div class="ads">
                                <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                                <!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                            <!-- ads -->
                        </div>
                        <!-- contact-page-content -->
                    </div>
                    <!-- col-md-5 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                <div class="contribute">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <h4>Contribute Us</h4>
                            <p>It may be small for you but it really change many lives. Come along!</p>
                        </div>
                        <div class="col-md-4"> <a target="_blank" href="https://www.instamojo.com/confiarsolutions/blood-bank-india-donation" class="donate-btn">Donate</a> </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                               @if(session('msg'))
                                        <script>
                                            alert('Thanks for Contact us!!!')
                                        </script>
                                        @endif
    <!-- contactus-main-content -->
</body>
<!-- Mirrored from www.bloodbankindia.net/contactus by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 09:28:57 GMT -->

</html>
<script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<!--Optional: include only if you are using the extra rules in additional-methods.js -->
<script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>

<script>
    $(function() {
        $("#contact").validate({
            rules: {
                cname: {
                    required: true,
                    minlength: 3,
                    maxlength: 12,
                    lettersonly: true
                },
                email: {
                    required: true
                },
                country: {
                    required: true
                },
                message1: {
                    required: true
                }
            },
            messages: {
                cname: {
                    required: "Please enter your name",
                    minlength: "Name should atleast 5 letter",
                    maxlength: "Name should not exceed 12 letter",
                    lettersonly: "Name should have only alphabets letter and space "
                },
                email: {
                    required: "Please enter your email"
                },
                country: {
                    required: "Please select Country"
                },
                message1: {
                    required: "Please enter message"
                }
            }
        });
    });
    $(".control-group .input-group select").addClass("form-control");
</script>
<script>
    $(document).ready(function() {
        $('#contact select').select2({
            placeholder: ''
        });
        $('button[data-select2-open]').click(function() {
            $('#' + $(this).data('select2-open')).select2('open');
        });
    });
</script>

@stop