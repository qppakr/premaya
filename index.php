<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
  <!-- Bootstrap Core CSS -->
  <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/helper.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
// require_once("controllers/Check.php");
// $Checkclass = new Checkclass();
// $Checkclass->Admin();

include('controllers/Connect.php');
$strSQL = "SELECT MAX(Teamcode) FROM account ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if($objResult)
{
echo implode(",", $objResult);
echo "<div class='text-left><button class='btn btn-success m-b-10 m-l-5' id='toastr-success-top-right'>Success</button></div>";
}
mysqli_close($con);
?>
<div class="text-left">
    <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button>
    <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Info</button>
    <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-right">Warning</button>
    <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-top-right">Error</button>
</div>
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

<script src="js/lib/toastr/toastr.min.js"></script>
<!-- scripit init-->
<script src="js/lib/toastr/toastr.init.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
</body>
</html>
