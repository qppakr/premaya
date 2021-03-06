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
</head>

<body class="fix-header fix-sidebar">
  <?php
  include('controllers/Connect.php');
  $strSQL = "SELECT * FROM account WHERE ID = '".$_GET['ID']."' ";
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
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  <h3>แก้ไขข้อมูลตัวแทน</h3>
                </div>

                <form name="EditMember" method="post" action="DEDIT-UPDATED.php" onSubmit="JavaScript:return fncSubmit();">
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

                <!-- End PAge Content -->
            </div>
				</div>

                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <!-- <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer> -->
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
