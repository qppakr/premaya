<?php
include("controllers/Connect.php");

$txtID = $_POST['txtID'];
$txtOldpass = md5($_POST['txtOldpass']);
$txtPassword = md5($_POST['txtPassword']);
$mesSuccess = 'บันทึกข้อมูลสำเร็จ!';
$mesError = 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล, โปรดติดต่อผู้ดูแลระบบ.';

$strSQL = "SELECT * FROM account WHERE ID = '$txtID' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if($objResult['Password'] == $txtOldpass){
  $cmdSQL = "UPDATE account SET Password='$txtPassword' WHERE ID = '$txtID'";
  $cmdQuery = mysqli_query($con,$cmdSQL);
  if($cmdQuery)
  {
    echo '<script language="JavaScript"> alert("' . $mesSuccess . '") </script>';
    echo "<script> window.location.href='PROFILE.php'; </script>";
    exit();
  }
  else
  {
    echo '<script language="JavaScript"> alert("' . $mesError . '") </script>';
    echo "<script> window.location.href='PROFILE.php'; </script>";
    exit();
  }
}
else {
  echo '<script language="JavaScript"> alert("' . $mesError . '") </script>';
  echo "<script> window.location.href='PROFILE.php'; </script>";
  exit();
}
?>
