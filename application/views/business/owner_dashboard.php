<?php $this->load->view("business/business_header") ?>
<div class="page-inner">
    <div class="page-title">
        <h3>Dashboard</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Dashboard</li>
                </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <i class="fa fa-suitcase" style="font-size: 40px;margin-top: 0;"></i>
                            <center><span class="info-box-title">Total business</span><p class="counter"><?php echo $total_business; ?></p></center>
                        </div>
                        <div class="info-box-icon">
                            <!--  -->
                            <span class="info-box-title">Active business:<p class="counter"><?php echo $abus; ?></p></span>
                            <span class="info-box-title">Block business:</span><p class="counter"><?php echo $bbus; ?></p></span>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 40%;transition-duration:1s;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <i class="fa fa-credit-card" style="font-size: 40px;margin-top: 0;"></i>
                            <center><span class="info-box-title">Total Payment</span><p class="counter"><?php echo $total_payment;?></p></center>
                        </div>
                        <div class="info-box-icon">
                            <!--  -->
                            <span class="info-box-title">Payment Done:<p class="counter"><?php echo $total_apayment;?></p></span>
                            <span class="info-box-title">Payment Pending:<p class="counter"><?php echo $total_bpayment;?></p></span>
                           
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 20%;transition:.5;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <i class="fa fa-calendar" style="font-size: 40px;margin-top: 0;"></i>
                            <center><span class="info-box-title">Total Events</span><p class="counter"><?php echo $total_event;?></p></center>
                        </div>
                        <div class="info-box-icon">
                            <!--  -->
                           <!--  <span class="info-box-title">Payment Done:<p class="counter">2</p></span>
                            <span class="info-box-title">Payment pending:</span><p class="counter">3</p></span> -->
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 20%;transition:.5;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <i class="fa fa-star" style="font-size: 40px;margin-top: 0;"></i>
                            <center><span class="info-box-title">Total Review</span><p class="counter"><?php echo $total_review;?></p></center>
                        </div>
                        <div class="info-box-icon">
                            <!--  -->
                           <!--  <span class="info-box-title">Payment Done:<p class="counter">2</p></span>
                            <span class="info-box-title">Payment pending:</span><p class="counter">3</p></span> -->
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 20%;transition:.5;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
      <!--   <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="panel panel-white">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="visitors-chart">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Visitors</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="flotchart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stats-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Browser Stats</h4>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                        <li>Google Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
                                        <li>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
                                        <li>Internet Explorer<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
                                        <li>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                        <li>Opera<div class="text-danger pull-right">7%<i class="fa fa-level-down"></i></div></li>
                                        <li>Mobile &amp; tablet<div class="text-success pull-right">4%<i class="fa fa-level-up"></i></div></li>
                                        <li>Others<div class="text-success pull-right">3%<i class="fa fa-level-up"></i></div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white" style="height: 100%;">
                    <div class="panel-heading">
                        <h4 class="panel-title">Server Load</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Expand/Collapse" class="panel-collapse"><i class="icon-arrow-down"></i></a>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="server-load">
                            <div class="server-stat">
                                <span>Total Usage</span>
                                <p>67GB</p>
                            </div>
                            <div class="server-stat">
                                <span>Total Space</span>
                                <p>320GB</p>
                            </div>
                            <div class="server-stat">
                                <span>CPU</span>
                                <p>57%</p>
                            </div>
                        </div>
                        <div id="flotchart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Weather</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="weather-widget">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="weather-top">
                                        <div class="weather-current pull-left">
                                            <i class="wi wi-day-cloudy weather-icon"></i>
                                            <p><span>83<sup>&deg;F</sup></span></p>
                                        </div>
                                        <h2 class="weather-day pull-right">Miami, FL<br><small><b>13th April, 2015</b></small></h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled weather-info">
                                        <li>Wind <span class="pull-right"><b>ESE 16 mph</b></span></li>
                                        <li>Humidity <span class="pull-right"><b>64%</b></span></li>
                                        <li>Pressure <span class="pull-right"><b>30.15 in</b></span></li>
                                        <li>UV Index <span class="pull-right"><b>6</b></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled weather-info">
                                        <li>Cloud Cover <span class="pull-right"><b>60%</b></span></li>
                                        <li>Ceiling <span class="pull-right"><b>17800 ft</b></span></li>
                                        <li>Dew Point <span class="pull-right"><b>70° F</b></span></li>
                                        <li>Visibility <span class="pull-right"><b>10 mi</b></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-unstyled weather-days row">
                                        <li class="col-xs-4 col-sm-2"><span>12:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>&deg;F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>13:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>&deg;F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>14:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>&deg;F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>15:00</span><i class="wi wi-day-cloudy"></i><span>83<sup>&deg;F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>16:00</span><i class="wi wi-day-cloudy"></i><span>82<sup>&deg;F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>17:00</span><i class="wi wi-day-sunny-overcast"></i><span>82<sup>&deg;F</sup></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Inbox</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="inbox-widget slimscroll">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar2.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Sandra Smith</p>
                                    <p class="inbox-item-text">Hey! I'm working on your...</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar3.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Christopher</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar4.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Amily Lee</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">13:17 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar5.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Nick Doe</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar2.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Sandra Smith</p>
                                    <p class="inbox-item-text">Hey! I'm working on your...</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/avatar4.png" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Amily Lee</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">9:56 AM</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel twitter-box">
                    <div class="panel-body">
                        <div class="live-tile" data-mode="flip" data-speed="750" data-delay="3000">
                            <span class="tile-title pull-right">New Tweets</span>
                            <i class="fa fa-twitter"></i>
                            <div><h2 class="no-m">It’s kind of fun to do the impossible...</h2><span class="tile-date">10 April, 2015</span></div>
                            <div><h2 class="no-m">Sometimes by losing a battle you find a new way to win the war...</h2><span class="tile-date">6 April, 2015</span></div>
                        </div>
                    </div>
                </div>
                <div class="panel facebook-box">
                    <div class="panel-body">
                        <div class="live-tile" data-mode="carousel" data-direction="horizontal" data-speed="750" data-delay="4500">
                            <span class="tile-title pull-right">Facebook Feed</span>
                            <i class="fa fa-facebook"></i>
                            <div><h2 class="no-m">If you're going through hell, keep going...</h2><span class="tile-date">23 March, 2015</span></div>
                            <div><h2 class="no-m">To improve is to change; to be perfect is to change often...</h2><span class="tile-date">15 March, 2015</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Project Stats</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive project-stats">  
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Project</th>
                                       <th>Status</th>
                                       <th>Manager</th>
                                       <th>Progress</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <th scope="row">452</th>
                                       <td>Mailbox Template</td>
                                       <td><span class="label label-info">Pending</span></td>
                                       <td>David Green</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">327</th>
                                       <td>Wordpress Theme</td>
                                       <td><span class="label label-primary">In Progress</span></td>
                                       <td>Sandra Smith</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">226</th>
                                       <td>Modern Admin Template</td>
                                       <td><span class="label label-success">Finished</span></td>
                                       <td>Chritopher Palmer</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">178</th>
                                       <td>eCommerce template</td>
                                       <td><span class="label label-danger">Canceled</span></td>
                                       <td>Amily Lee</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">157</th>
                                       <td>Website PSD</td>
                                       <td><span class="label label-info">Testing</span></td>
                                       <td>Nick Doe</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">157</th>
                                       <td>Fronted Theme</td>
                                       <td><span class="label label-warning">Waiting</span></td>
                                       <td>David Green</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --><!-- Main Wrapper -->
<?php $this->load->view("business/business_footer"); ?>                