@extends('Admin.layouts.defaults')
@section('abc')
   

   
            
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Dashboard Blood Donation System</h2>
                                                <p>Welcome to Blood Donation System <span class="bread-ntd">Admin Template</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>All Donors</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$count}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Requests</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$count1}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Active Donors</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                   
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$count2}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Donations</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$count3}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div >
           <div id="piechart_3d" style="margin-left: 10px;width: 1118px; height: 500px;"></div>
       </div>
       
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total Donor',    {{$count}}],
          ['Requests',      {{$count1}}],
          ['Donation',  {{$count3}}]
          
        ]);

        var options = {
          title: 'Statistics of Blood Dantion system',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        
     
  
@stop