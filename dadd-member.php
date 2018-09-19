<?php
include('controllers/Check.php');
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
<SCRIPT TYPE="text/javascript">
<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=400,height=500,scrollbars=yes');
return false;
}
//-->
</SCRIPT>
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
                    <h3 class="text-primary">เพิ่ม/ลบ รายชื่อ</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">การจัดการ</a></li>
                        <li class="breadcrumb-item active">เพิ่ม/ลบ รายชื่อ</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">เพิ่มรายชื่อตัวแทน</h4>
                                <h6 class="card-subtitle">เลือกกระทำส่งออกข้อมูล คัดลอก, ไฟล์ CSV, ไฟล์ Excel, ไฟล์ PDF & พิมพ์</h6>
                                <form action="#">
                                    <div class="form-body">
                                        <hr>
                                        <!--/row-->
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group has-success">
                                                  <label class="control-label">รหัสตัวแทน</label>
                                                  <input type="text" id="ID" class="form-control custom-select" placeholder="PMY 00" maxlength="2">
                                                  <small class="form-control-feedback"> กำหนดรหัสเฉพาะแม่ทีมเท่านั้น (ระบุตัวเลขเท่านั้น) </small> </div>
                                          </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group has-warning">
                                                    <label class="control-label">อีเมล์</label>
                                                    <input type="email" id="Username" class="form-control custom-select" placeholder="">
                                                    <small class="form-control-feedback"> ระบุอีเมล์เพื่อกำหนดเป็นชื่อเข้าใช้ </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-warning">
                                                    <label class="control-label">รหัสผ่าน</label>
                                                    <input type="text" id="Password" class="form-control custom-select" placeholder="">
                                                    <small class="form-control-feedback"> กำหนดรหัสผ่านให้เป็นค่าเริ่มต้น (ตัวเลข, ภาษาอังกฤษเท่านั้น) </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">ชื่อจริง</label>
                                                    <input type="text" id="Firstname" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> ชื่อจริง (ภาษาไทย) </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">นามสกุล</label>
                                                    <input type="text" id="Lastname" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> นามสกุล (ภาษาไทย) </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">ชื่อเล่น</label>
                                                  <input type="text" id="Nickname" class="form-control" placeholder="">
                                                  <small class="form-control-feedback"> ชื่อเล่น (ภาษาไทย) </small> </div>
                                          </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">เบอร์ติดต่อ</label>
                                                  <input type="text" id="Phone" class="form-control" placeholder="">
                                                  <small class="form-control-feedback"> เบอร์โทรศัพท์ที่ติดต่อได้ </small> </div>
                                          </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">LINE ID</label>
                                                    <input type="text" id="LineID" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"></small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Facebook</label>
                                                  <input type="text" id="Facebook" class="form-control" placeholder="">
                                                  <small class="form-control-feedback"></small> </div>
                                          </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Instagram</label>
                                                    <input type="text" id="Instagram" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"></small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">ที่อยู่</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>ที่อยู่</label>
                                                    <input type="text" id="Address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>จังหวัด</label>
                                                    <select name="Country" class="form-control custom-select">
                                                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                        <option value="กระบี่">กระบี่ </option>
                                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                                        <option value="จันทบุรี">จันทบุรี</option>
                                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                                        <option value="ชัยนาท">ชัยนาท </option>
                                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                                        <option value="ชุมพร">ชุมพร </option>
                                                        <option value="ชลบุรี">ชลบุรี </option>
                                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                                        <option value="เชียงราย">เชียงราย </option>
                                                        <option value="ตรัง">ตรัง </option>
                                                        <option value="ตราด">ตราด </option>
                                                        <option value="ตาก">ตาก </option>
                                                        <option value="นครนายก">นครนายก </option>
                                                        <option value="นครปฐม">นครปฐม </option>
                                                        <option value="นครพนม">นครพนม </option>
                                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                                        <option value="นราธิวาส">นราธิวาส </option>
                                                        <option value="น่าน">น่าน </option>
                                                        <option value="นนทบุรี">นนทบุรี </option>
                                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                                        <option value="ปัตตานี">ปัตตานี </option>
                                                        <option value="พะเยา">พะเยา </option>
                                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                                        <option value="พังงา">พังงา </option>
                                                        <option value="พิจิตร">พิจิตร </option>
                                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                                        <option value="แพร่">แพร่ </option>
                                                        <option value="พัทลุง">พัทลุง </option>
                                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                                        <option value="ยโสธร">ยโสธร </option>
                                                        <option value="ยะลา">ยะลา </option>
                                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                                        <option value="ระนอง">ระนอง </option>
                                                        <option value="ระยอง">ระยอง </option>
                                                        <option value="ราชบุรี">ราชบุรี</option>
                                                        <option value="ลพบุรี">ลพบุรี </option>
                                                        <option value="ลำปาง">ลำปาง </option>
                                                        <option value="ลำพูน">ลำพูน </option>
                                                        <option value="เลย">เลย </option>
                                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                                        <option value="สกลนคร">สกลนคร</option>
                                                        <option value="สงขลา">สงขลา </option>
                                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                                        <option value="สระแก้ว">สระแก้ว </option>
                                                        <option value="สระบุรี">สระบุรี </option>
                                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                                        <option value="สุโขทัย">สุโขทัย </option>
                                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                                        <option value="สุรินทร์">สุรินทร์ </option>
                                                        <option value="สตูล">สตูล </option>
                                                        <option value="หนองคาย">หนองคาย </option>
                                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                                        <option value="อุดรธานี">อุดรธานี </option>
                                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                                        <option value="อ่างทอง">อ่างทอง </option>
                                                        <option value="อื่นๆ">อื่นๆ</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save </button> 
                                        <button type="button" class="btn btn-inverse"> Cancel </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
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
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>

</body>

</html>
