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

    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>ลงทะเบียนตัวแทน</h4>
                                    <div>
                                      <?php
                                      $strPassword = md5($_POST['txtPassword']);

                                      require_once('controllers/Connect.php');

                                      if(trim($_POST["txtFirstname"]) == "")
                            					{
                            						echo "<p class='alert alert-danger'>กรุณาใส่ชื่อ!</p>";
                            						exit();
                            					}
                            					if(trim($_POST["txtLastname"]) == "")
                            					{
                            						echo "<p class='alert alert-danger'>กรุณาใส่นามสกุล!</p>";
                            						exit();
                            					}
                                      if(trim($_POST["txtEmail"]) == "")
                            					{
                            						echo "<p class='alert alert-danger'>กรุณาใส่อีเมล์!</p>";
                            						exit();
                            					}
                            					if(trim($_POST["txtPassword"]) == "")
                            					{
                            						echo "<p class='alert alert-danger'>กรุณาใส่รหัสผ่าน!</p>";
                            						exit();
                            					}
                                      $strSQL = "SELECT * FROM account WHERE Email = '".trim($_POST["txtEmail"])."' ";
                            					$objQuery = mysqli_query($con,$strSQL);
                            					$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
                            					if($objResult)
                            					{
                            						echo "<p class='alert alert-danger'> อีเมล์นี้มีการลงทะเบียนตัวแทนแล้ว! </p>";
                            					}
                                      else
                            					{
                                        $strSQL = "SELECT * FROM account WHERE PMC = '".trim($_POST["txtPMC"])."' ";
                              					$objQuery = mysqli_query($con,$strSQL);
                              					$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
                              					if($objResult) {
                                          $strNum = "SELECT MAX(Membercode) FROM account WHERE Teamcode = '".$objResult["Teamcode"]."' ";
                                          $objQuery2 = mysqli_query($con,$strNum);
                                          $objNum = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
                                          $Num = implode("",$objNum);
                                          if($objNum < 1){
                                            $Num = 1;
                                          }
                                          else {
                                            $Num++;
                                          }
                                          $birthday = $_POST["bday"] .'/'. $_POST["bmonth"] .'/'. $_POST["byear"];
                                          $strSQL = "INSERT INTO account (Firstname,Lastname,Birthday,Email,Password,Teamcode,Membercode) VALUES ('".$_POST["txtFirstname"]."','".$_POST["txtLastname"]."','$birthday','".$_POST["txtEmail"]."','$strPassword','".$objResult["Teamcode"]."','$Num')";
                                					$objQuery = mysqli_query($con,$strSQL);
                                          echo "<p class='alert alert-success'>ลงทะเบียนตัวแทนสำเร็จ! </p><br>";

                                          echo "<center> <br><a class='btn' href='index.php'>เข้าสู่ระบบ</a> </center>";
                                        }
                                        else {
                                          echo "<p class='alert alert-danger'>ระบุ PMC ไม่ถูกต้อง! ,หากไม่ทราบโปรดติดต่อแม่ทีม.</p>";
                              						exit();
                                        }
                                      }

                            					mysqli_close($con);
                            					?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

</body>

</html>
