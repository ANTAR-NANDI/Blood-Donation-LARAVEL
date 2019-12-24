@extends('User.layouts.defaults')
@section('abc')

 
            <div class="container">

 
    
                         <h1>Search Results</h1>
                         <div class="row">
        @foreach($donors as $d)
             <div class="col-md-4 mr-2">
                      <div class="card">
                        <div class="card-body" style="margin-right: 30px">
                          <pre class="text-uppercase" style="font-weight: bold;">
Name: {{$d->fullname}}
Blood-Group: {{$d->blood}}
Mobile-No.:{{$d->mobile}}
Address: {{ $d->address }}
Location: {{ $d->city }}
                          </pre>
                        </div>
                      </div>
                    </div>
            



        @endforeach
    </div>
</div>
    
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
        
       <!--  -->
                        
                       
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
        var donor = "7400";
        var request = "2000";
        var active = "3500";
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