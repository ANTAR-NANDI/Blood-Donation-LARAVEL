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
                            <!-- <li class=""><a href="{{ URL::to('Donor/home') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 12px">Search Blood</a></li> -->
                             <li class=""><a href="{{ URL::to('Donor/request') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Request Blood</a> </li>
                             <li class=""><a href="{{ URL::to('Donor/yourrequest') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Your Request</a> </li>
                            
                            
                            
                           
                            <li class=""><a href="{{ URL::to('Donor/adddonation') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Add Donation</a></li>

                            <li class=""><a href="{{ URL::to('Donor/donation') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">View Donation</a></li>

                            <li class=""><a href="{{ URL::to('Donor/contact') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Contact</a></li>
                     <li class=""><a href="{{ URL::to('Donor/about') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">About</a> </li>
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
   
    <!-- /.nav-bar-main -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
    