<?php
require_once('controllers/Check.php');
$Checkclass = new Checkclass();
$Checkclass->Member();
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
    <title>PRIMAYA - Member</title>

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
<script language="javascript">
function fncSubmitPass()
{
	if(document.EditPassword.txtPassword.value == "")
	{
		alert('ต้องระบุรหัสผ่านใหม่');
		document.EditPassword.txtPassword.focus();
		return false;
	}
	document.EditPassword.submit();
}
</script>
  <?php
  include('controllers/Connect.php');
  $strSQL = "SELECT * FROM account WHERE ID = '".$_SESSION['ID']."' ";
  $objQuery = mysqli_query($con,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
   ?>
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
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/photo/<?php echo $objResult["Photo"]; ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> ข้อมูลส่วนตัว</a></li>
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
                              <li><a href="#">ข้อมูลส่วนตัว</a></li>
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
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-two">
                                  <header>
                                      <div class="avatar">
                                          <img src="images/photo/<?php echo $objResult["Photo"]; ?>" alt="" />
                                      </div>
                                  </header>

                                  <h3><?php echo $objResult["Firstname"];?> <?php echo $objResult["Lastname"];?></h3>
                                  <!-- <div class="desc">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit et cupiditate deleniti.
                                  </div> -->
                                  <div align="center">
                                    <a href="screen.php" target="_blank" class="btn btn-success"> ออกบัตรตัวแทน </a>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="col-lg-12">
                      <div class="card">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs profile-tab" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">แก้ไขรูปประจำตัว</a> </li>
                              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#qrcode" role="tab">แก้ไขคิวอาร์โค้ด</a> </li>
                              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">แก้ไขข้อมูลส่วนตัว</a> </li>
                              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#passtab" role="tab">แก้ไขรหัสผ่าน</a> </li>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                              <!--second tab-->
                              <div class="tab-pane active" id="profile" role="tabpanel">
                                  <div class="card-body">
                                      <!-- <h4 class="font-medium m-t-30">แก้ไขรูปประจำตัวและคิวอาร์โค้ด</h4> -->
                                      <br>
                                      <hr>
                                      <iframe src="images/photo/index.php" width="100%" height="600px" frameBorder="0"></iframe>
                                  </div>
                              </div>
                              <div class="tab-pane" id="qrcode" role="tabpanel">
                                  <div class="card-body">
                                      <!-- <h4 class="font-medium m-t-30">แก้ไขรูปประจำตัวและคิวอาร์โค้ด</h4> -->
                                      <br>
                                      <hr>
                                      <iframe src="images/qrcode/index.php" width="100%" height="600px" frameBorder="0"></iframe>
                                  </div>
                              </div>

                              <div class="tab-pane" id="settings" role="tabpanel">
                                  <div class="card-body">
                                    <form name="EditMember" method="post" action="PROFILE-UPDATED.php" onSubmit="JavaScript:return fncSubmit();">
                                      <!-- onSubmit="JavaScript:return fncSubmit();" -->
                                      <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                        <div class="form-body">
                                            <hr>
                                            <!--/row-->
                                            <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group has-success">
                                                      <input type="text" name="txtTeamcode" id="PMYCode" class="form-control custom-select" value="PMY<?php echo $objResult["Teamcode"];?>-<?php echo $objResult["Membercode"];?>" maxlength="2" disabled>
                                                      <input type="text" name="txtID" id="ID" value="<?php echo $objResult["ID"];?>" hidden>
                                                      <small class="form-control-feedback"> รหัสตัวแทนของคุณ </small> </div>
                                              </div>
                                                <!--/span-->

                                                <div class="col-md-6" <?php if($objResult["Membercode"] != "000"){ echo "hidden"; }?>>
                                                    <div class="form-group has-success">
                                                        <input type="text" name="txtPMC" id="PMC" class="form-control custom-select" value="<?php echo $objResult["PMC"];?>" maxlength="10">
                                                        <small class="form-control-feedback"> รหัส PMC ของคุณ </small> </div>
                                                </div>

                                                <!--/span-->
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group has-warning">
                                                        <label class="control-label">อีเมล์</label>
                                                        <input type="email" name="txtEmail" id="Email" class="form-control custom-select" value="<?php echo $objResult["Email"];?>" disabled>
                                                        <small class="form-control-feedback"> อีเมล์เข้าใช้งาน </small> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ชื่อจริง</label>
                                                        <input type="text" name="txtFirstname" id="Firstname" class="form-control" value="<?php echo $objResult["Firstname"];?>">
                                                        <small class="form-control-feedback"> ชื่อจริง (ภาษาไทย) </small> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">นามสกุล</label>
                                                        <input type="text" name="txtLastname" id="Lastname" class="form-control" value="<?php echo $objResult["Lastname"];?>">
                                                        <small class="form-control-feedback"> นามสกุล (ภาษาไทย) </small> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="control-label">ชื่อเล่น</label>
                                                      <input type="text" name="txtNickname" id="Nickname" class="form-control" value="<?php echo $objResult["Nickname"];?>">
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
                                                      <input type="text" name="txtPhone" id="Phone" class="form-control" value="<?php echo $objResult["Phone"];?>" maxlength="10">
                                                      <small class="form-control-feedback"> เบอร์โทรศัพท์ที่ติดต่อได้ </small> </div>
                                              </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">LINE ID</label>
                                                        <input type="text" name="txtLine" id="LineID" class="form-control" value="<?php echo $objResult["LineID"];?>">
                                                        <small class="form-control-feedback"></small> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="control-label">Facebook</label>
                                                      <input type="text" name="txtFacebook" id="Facebook" class="form-control" value="<?php echo $objResult["Facebook"];?>">
                                                      <small class="form-control-feedback">เฉพาะชื่อเฟสบุ้คเท่านั้น</small> </div>
                                              </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Instagram</label>
                                                        <input type="text" name="txtIG" id="Instagram" class="form-control" value="<?php echo $objResult["IG"];?>">
                                                        <small class="form-control-feedback">เฉพาะชื่อไอดี Instagram เท่านั้น</small> </div>
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
                                                        <input type="text" name="txtAddress" id="Address" class="form-control" value="<?php echo $objResult["Address"];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>จังหวัด</label>
                                                        <select name="selCountry" class="form-control custom-select" value="<?php echo $objResult["County"];?>">
                                                            <option value="<?php echo $objResult["County"];?>" selected>-- <?php echo $objResult["County"];?> -- </option>
                                                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร </option>
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
                                        <?php mysqli_close($con) ?>
                                        <div class="form-actions" align="center">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> บันทึก </button>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-inverse"> ยกเลิก </button>
                                        </div>
                                    </form>
                                  </div>
                              </div>
                              <div class="tab-pane" id="passtab" role="tabpanel">
                                <form name="EditPassword" method="post" action="PASSWORD-UPDATED.php" onSubmit="JavaScript:return fncSubmitPass();">
                                  <!-- onSubmit="JavaScript:return fncSubmit();" -->
                                  <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                  <div class="card-body">
                                      <!-- <h4 class="font-medium m-t-30">แก้ไขรูปประจำตัวและคิวอาร์โค้ด</h4> -->
                                      <br>
                                      <hr>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">รหัสผ่านเดิม</label>
                                                <input type="text" name="txtOldpass" id="Oldpass" class="form-control" placeholder="">
                                                <input type="text" name="txtID" id="ID" value="<?php echo $objResult["ID"];?>" hidden>
                                                <small class="form-control-feedback"> ระบุรหัสผ่านเดิม เพื่อยืนยัน </small> </div>
                                        </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">รหัสผ่านใหม่</label>
                                                <input type="text" name="txtPassword" id="Password" class="form-control" placeholder="">
                                                <small class="form-control-feedback"> กำหนดรหัสผ่านใหม่ (ตัวเลข, ภาษาอังกฤษเท่านั้น) </small> </div>
                                        </div>
                                          <!--/span-->
                                      </div>
                                      <div class="form-actions" align="center">
                                          <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> บันทึก </button>
                                      </div>

                                  </div>
                                </form>
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
