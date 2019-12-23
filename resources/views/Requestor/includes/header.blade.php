<span class="errspns"></span>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="mobilemenu">
                    <a href="#" class="menu-toggle-btn">
                        <span id="toggle" class="">
                             </span>
                    </a>
                </div>
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ URL::to('/') }}"><img src="{{ asset('website/bbi_theme/images/bbi-logo.png') }}" alt="Universe" /></a>
                    </div>
                </div>
                
                <!-- /.header-right -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <div class="row">
                    <nav class="main-navigation clearfix visible-md visible-lg" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class=""><a href="{{ URL::to('Requestor/home') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Search Blood</a></li>
                             <li class=""><a href="{{ URL::to('Requestor/request') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Request Blood</a> </li>
                             <li class=""><a href="{{ URL::to('Requestor/yourrequest') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Your Request</a> </li>
                            
                            
                            
                           
                            <li class=""><a href="{{ URL::to('Requestor/tips') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Blood Tips</a></li>
                            <li class=""><a href="{{ URL::to('Requestor/contact') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Contact</a></li>
                     <li class=""><a href="{{ URL::to('Requestor/about') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">About</a> </li>
                              <li class=""><a href="{{ URL::to('logout') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Logout</a></li>



                        </ul>
                        <!-- /.main-menu -->
                    </nav>
                    <!-- /.main-navigation -->
                </div>
                <!-- container -->
            </div>
            <!-- row -->
        </div>
        <!-- /.nav-bar-main -->
    </header>
    <!-- /.site-header -->
    <!-- mobile views changing button code -->
    <div class="mobile-login">
        <a href="#" data-toggle="modal" data-target="#myModal" class="mob-btn"> <i class="fa fa-user fa-1x" aria-hidden="true"></i> Login</a>
        <a href="donors/register.html" class="mob-btn-2"> <i class="fa fa-lock fa-1x" aria-hidden="true"></i> REGISTER NOW</a>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4> </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="https://www.bloodbankindia.net/donors/login_action" id="login_user_mobile">
                            <!-- </ul> -->
                            <ul class="nav nav-pills">
                                <li>
                                    <label>Email </label>
                                    <input type="text" id="emailid" name="emailid" rel="tooltip" value="" title="Email can contain only letters, numbers, periods (.), @, hyphens (-) and underscores (_)." /> </li>
                                <li>
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" rel="tooltip" value="" title=" Please enter your password. Minimum 8 characters,case sensitive." /> </li>
                                <li>
                                    <button type="submit" class="btn btn-danger login-form-head">Login</button> <a href="donors/forgotpassword.html" class="forgot">Forgot password?</a>
                                    <!-- <div class="mobile-fb-btn"> <a href="#" class="reg-btn-2"><i class="fa fa-facebook" aria-hidden="true"></i>Login using Facebook</a> </div> -->
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!-- <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> --></div>
            </div>
        </div>
        <div class="header-login-right"> <a href="#" class="reg-btn hvr-bounce-to-bottom m1">REGISTER NOW</a>
            <!-- <p>Facebook Account</p> -->
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="container">
            <ul class="mobile-menu">
                <li class=""><a href="home.html">Search Donors</a></li>
                <li class=""><a href="aboutus.html">About Us</a> </li>
                <!-- <li class=""><a href="https://www.bloodbankindia.net/donors/register">Donor Registration</a> </li> -->
                <!-- <li class=""><a href="https://www.bloodbankindia.net/donors/search">Search Donors</a> </li> -->
                <li class=""><a href="donors/register.html">Register As Donor</a>
                    <li class=""><a href="tools/requestblood.html">Request Blood</a> </li>
                    <li class=""><a href="information/blooddonationtips.html">Blood Tips</a></li>
                    <li class=""><a href="contactus.html">Contact Us</a></li>





            </ul>
            <!-- /.main-menu -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.nav-bar-main -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
    