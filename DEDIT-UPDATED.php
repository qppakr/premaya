<?php
include("controllers/Connect.php");
$txtID = $_POST["txtID"];
$txtFirstname = $_POST["txtFirstname"];
$txtLastname = $_POST["txtLastname"];
$txtNickname = $_POST["txtNickname"];
$txtPhone = $_POST["txtPhone"];
$txtLine = $_POST["txtLine"];
$txtFacebook = $_POST["txtFacebook"];
$txtIG = $_POST["txtIG"];
$txtAddress = $_POST["txtAddress"];
$selCountry = $_POST["selCountry"];
$mesSuccess = 'บันทึกข้อมูลสำเร็จ!';
$mesError = 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล, โปรดติดต่อผู้ดูแลระบบ.';

  $cmdSQL = "UPDATE account SET Firstname='$txtFirstname' ,Lastname='$txtLastname' ,Nickname='$txtNickname' ,Phone='$txtPhone' ,LineID='$txtLine' ,Facebook='$txtFacebook' ,IG='$txtIG' ,Address='$txtAddress' ,County='$selCountry' WHERE ID = '$txtID'";
  $cmdQuery = mysqli_query($con,$cmdSQL);
  if($cmdQuery)
  {
    echo '<script language="JavaScript"> alert("' . $mesSuccess . '") </script>';
    echo "<script> window.close(); </script>";
    exit();
  }
  else
  {
    echo '<script language="JavaScript"> alert("' . $mesError . '") </script>';
    echo "<script> window.close(); </script>";
    exit();
  }

mysqli_close($con);
?>
