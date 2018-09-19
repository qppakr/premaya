<?php
require_once('controllers/Check.php');
$Checkclass = new Checkclass();
$Checkclass->Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="พรีม่า มาย่า พรีมาย่า primaya">
    <meta name="author" content="PRIMAYA">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>PRIMAYA - Member management</title>

    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="images/primaya_logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="dprofile.php"><i class="ti-user"></i> ข้อมูลส่วนตัว</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> ล็อคเอ้าท์</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">โฮม</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">แผงควบคุม <span class="label label-rouded label-primary pull-right">1</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">ข้อมูลโดยรวม </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">การจัดการ</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">รายชื่อตัวแทน</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dmember.php">รายชื่อทั้งหมด</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-pencil-square-o"></i><span class="hide-menu">เพิ่ม/ลบ รายชื่อ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dadd-member.php">เพิ่มรายชื่อตัวแทน</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">อื่นๆ</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-plus-square-o"></i><span class="hide-menu">อัพเดทเพิ่มเติม <span class="label label-rouded label-warning pull-right">*</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="403.html">รอการปรับปรุง</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">แผงควบคุม</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">โฮม</a></li>
                        <li class="breadcrumb-item active">แผงควบคุม</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bag f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">278</h2>
                                    <p class="m-b-0">ตัวแทนทั้งหมด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-comment f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">278</h2>
                                    <p class="m-b-0">ตัวแทน VIP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-vector f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">$27647</h2>
                                    <p class="m-b-0">มีตัวแทนมากที่สุด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-location-pin f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">278</h2>
                                    <p class="m-b-0">จังหวัดมากที่สุด</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>ตัวแทนใหม่ล่าสุด</h4>
                            </div>
                            <div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover ">
										<thead>
											<tr>
												<th>Device</th>
												<th>Visits</th>
												<th>Avg. time</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Unknown</td>
												<td>2,456</td>
												<td>00:02:36</td>
											</tr>
											<tr>
												<td>Apple iPad</td>
												<td>1,006</td>
												<td>00:03:41</td>
											</tr>
											<tr>
												<td>Apple iPhone</td>
												<td>68</td>
												<td>00:04:10</td>
											</tr>
											<tr>
												<td>HTC Desire</td>
												<td>38</td>
												<td>00:01:40</td>
											</tr>
											<tr>
												<td>Samsung</td>
												<td>20</td>
												<td>00:04:54</td>
											</tr>
											<tr>
												<td>Apple iPad</td>
												<td>1,006</td>
												<td>00:03:41</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-title">
                            <h4>กำลังใช้งาน</h4>
                        </div>
                        <div class="card-body">
                            <div class="recent-meaasge">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">john doe</h4>
                                        <div class="meaasge-date">15 minutes Ago</div>
                                        <p class="f-s-12">We are happy about your service </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/2.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. John</h4>
                                        <div class="meaasge-date">40 minutes ago</div>
                                        <p class="f-s-12">Quick service and good serve </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/3.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. Michael</h4>
                                        <div class="meaasge-date">1 minutes ago</div>
                                        <p class="f-s-12">We like your birthday cake </p>
                                    </div>
                                </div>
                                <div class="media no-border">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/2.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. John</h4>
                                        <div class="meaasge-date">40 minutes ago</div>
                                        <p class="f-s-12">Quick service and good serve </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
