<footer class="site-footer">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-10"> -->
                <div class="footer-widget">
                    <!-- <h4 class="footer-widget-title">Quick Links</h4> -->
                    <ul class="list-links">
                        <li><a href="{{ URL::to('index') }}">Search Donors</a></li>
                        <li><a href="{{ URL::to('about') }}">About Us</a></li>
                        <!-- <li><a href="https://www.bloodbankindia.net/donors/register">Donor Registration</a></li> </li> -->
                        <!-- <li><a href="https://www.bloodbankindia.net/donors/search">Search Donors</a></li> -->
                        <li><a href="{{ URL::to('register') }}">Register As Donor </a></li>
                        <li><a href="{{ URL::to('request') }}">Request Blood</a></li>
                        <li><a href="{{ URL::to('tips') }}">Blood Tips</a></li>
                        <li><a href="{{ URL::to('privacy') }}">Privacy Policy</a></li>
                        <p class="small-text"> <a href="index.html"><strong>BloodBankIndia.net</strong></a> People Project from <a href="http://www.usistech.com/" target="_blank"><strong>uSiS Technologies.</strong></a> All rights reserved &copy; 2017</p>
                    </ul>
                </div>
                <!-- footer-widget -->
                <!-- </div> -->
                <!-- col-md-10 -->
                <!-- <div class="footer-widget col-md-2"> -->
                <div class="footer-media-icons">
                    <ul>
                        <!-- <li><a href="http://www.twitter.com"><img src="https://www.bloodbankindia.net/bbi_theme/images/tw-footer.png" alt="footer-tw" /></a></li> -->
                        <li>
                            <a href="{{ asset('website/bbi_theme/images/fb-footer.png') }}" alt="facebook page link for blood bank india" /></a>
                            <p><i class="fab fa-facebook-f"></i></p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </footer>
    <!-- /.site-footer -->
    <footer class="site-footer-mobile">
        <div class="container">
            <div class="row">
                <div class="footer-media-icons">
                    <ul>
                        <!-- <li><a href="http://www.twitter.com"><img src="https://www.bloodbankindia.net/bbi_theme/images/tw-footer.png" alt="footer-tw" /></a></li> -->
                        <li>
                            <a href="https://www.facebook.com/BloodBankIndia/"><img src="bbi_theme/images/fb-footer.png" alt="footer-fb" /></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-10"> -->
                <div class="footer-widget">
                    <!-- <h4 class="footer-widget-title">Quick Links</h4> -->
                    <ul class="list-links">
                        <li><a href="home.html">Search Donors</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="donors/register.html">Donor Registration</a></li>
                        </li>
                        <!-- <li><a href="https://www.bloodbankindia.net/donors/search">Search Donors</a></li> -->
                        <li><a href="tools/requestblood.html">Request Blood</a></li>
                        <li><a href="information/blooddonationtips.html">Blood Tips</a></li>
                        <li><a href="information/privacypolicy.html">Privacy Policy</a></li>
                        <p class="small-text"> <a href="index.html"><strong>BloodBankIndia.net</a></strong>
                        </p>
                        <p class="small-text">A People Project from <a href="http://www.usistech.com/" target="_blank"><strong>uSiS Technologies.</a></strong>
                        </p>
                        <p class="small-text">All rights reserved &copy; 2017</strong>
                        </p>
                    </ul>
                </div>
                <!-- footer-widget -->
                <!-- </div> -->
                <!-- col-md-10 --> </div>
            <!-- row -->
        </div>
        <!-- container -->
    </footer>
    <!-- /.site-footer -->
    <script src="{{ asset('website/bbi_theme/js/plugins.js') }}">
    </script>
    <script src="{{ asset('website/bbi_theme/js/custom.js') }}">
    </script>
     <script src="{{ asset('website/bbi_theme/toatr.js') }}">
    </script>

    <div id="fb-root">
    </div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1694815347450925";
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

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-81353730-1', 'auto');
        ga('send', 'pageview');
    </script>