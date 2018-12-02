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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/4.0.11/css/tableexport.css" rel="stylesheet"> -->
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
                                    <li><a href="DPROFILE.php"><i class="ti-user"></i> ข้อมูลส่วนตัว</a></li>
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
                                <li><a href="DASHBOARD.php">ข้อมูลโดยรวม </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">การจัดการ</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">รายชื่อตัวแทน</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="DMEMBER.php">รายชื่อทั้งหมด</a></li>
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
                    <h3 class="text-primary">รายชื่อตัวแทน</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">การจัดการ</a></li>
                        <li class="breadcrumb-item active">รายชื่อตัวแทน</li>
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
                                <h4 class="card-title">รายชื่อตัวแทนทั้งหมด</h4>
                                <h6 class="card-subtitle">เลือกกระทำส่งออกข้อมูล คัดลอก, ไฟล์ CSV, ไฟล์ Excel</h6>
                                <div class="table-responsive m-t-40">
                                  <div><a href="DMEMBER-EXPORT.php" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-export"></i> Export . . . </a>
</div>
                                  <?php
      									include("controllers/Connect.php");
      									$strSQL = "SELECT * FROM account ORDER BY ID";
      									$objQuery = mysqli_query($con,$strSQL) or die ("Error Query [".$strSQL."]");
      									?>
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>รหัสตัวแทน</th>
                                                <th>ชื่อ - นามสกุล</th>
                                                <th>ชื่อเล่น</th>
                                                <th>จังหวัด</th>
                                                <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>รหัสตัวแทน</th>
                                              <th>ชื่อ - นามสกุล</th>
                                              <th>ชื่อเล่น</th>
                                              <th>จังหวัด</th>
                                              <th>จัดการ</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <?php
            									  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
            									  {
            									?>
                                            <tr>
                                                <td><a href="#">PMY<?php echo $objResult["Teamcode"]; ?>-<?php echo $objResult["Membercode"]; ?></a></td>
                                                <td><?php echo $objResult["Firstname"]; ?> <?php echo $objResult["Lastname"]; ?></td>
                                                <td><?php echo $objResult["Nickname"]; ?></td>
                                                <td><?php echo $objResult["County"]; ?></td>
                                                <td><a href="DEDIT-MEMBER.php?ID=<?php echo $objResult["ID"];?>" class="btn btn-info btn-xs" onClick="return popup(this, 'stevie')" > แก้ไข </a>&nbsp;
                                                  <a class="btn btn-danger btn-xs" href="JavaScript:if(confirm('ต้องการที่จะลบรายชื่อนี้หรือไม่?\nคุณจะไม่สารมารถทำการย้อนกลับข้อมูลได้ หากยืนยันการลบ!! ')==true){window.location='ddel.php?ID=<?php echo $objResult["ID"];?>';}"> ลบ</a></td>
                                            </tr>
                                            <?php
                        									  }
                        	  								?>
                                        </tbody>
                                    </table>
                                    <?php mysqli_close($con); ?>
                                </div>
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

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.11.10/xlsx.core.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blob-polyfill/1.0.20150320/Blob.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/4.0.11/js/tableexport.min.js"></script> -->


    <!-- <script>

  		TableExport(document.getElementsByTagName("table"), {
  			headers: true,                              // (Boolean), display table headers (th or td elements) in the <thead>, (default: true)
  			footers: true,                              // (Boolean), display table footers (th or td elements) in the <tfoot>, (default: false)
  			formats: ['xlsx', 'csv', 'txt'],             // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
  			filename: 'PrimayaMember',                             // (id, String), filename for the downloaded file, (default: 'id')
  			bootstrap: true,                           // (Boolean), style buttons using bootstrap, (default: true)
  			exportButtons: true,                        // (Boolean), automatically generate the built-in export buttons for each of the specified formats (default: true)
  			position: 'top',                         // (top, bottom), position of the caption element relative to table, (default: 'bottom')
  			ignoreRows: null,                           // (Number, Number[]), row indices to exclude from the exported file(s) (default: null)
  			ignoreCols: null,                           // (Number, Number[]), column indices to exclude from the exported file(s) (default: null)
  			trimWhitespace: true                        // (Boolean), remove all leading/trailing newlines, spaces, and tabs from cell text in the exported file(s) (default: false)
  		});

  	</script> -->

</body>

</html>
