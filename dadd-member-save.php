<?php
include("controllers/Connect.php");
$txtTeamcode = $_POST["txtTeamcode"];
$txtEmail = $_POST["txtEmail"];
$txtPassword = md5($_POST["txtPassword"]);
$txtFirstname = $_POST["txtFirstname"];
$txtLastname = $_POST["txtLastname"];
$txtNickname = $_POST["txtNickname"];
$txtPhone = $_POST["txtPhone"];
$txtLine = $_POST["txtLine"];
$txtFacebook = $_POST["txtFacebook"];
$txtIG = $_POST["txtIG"];
$txtAddress = $_POST["txtAddress"];
$selCountry = $_POST["selCountry"];
$mesSuccess = 'บันทึกข้อมูลสำเร็จ! โปรดจดข้อมูลนี้ไว้ให้ตัวแทน: PMY'.$txtTeamcode.' \n\nอีเมล์เข้าใช้งาน: '.$txtEmail.'\nรหัสผ่าน: '.$_POST["txtPassword"].' \n\nหลังจากนั้นให้ตัวแทนเข้าสู่ระบบเพื่อกำหนดรหัส PMC ด้วยตนเอง.';
$mesError = 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล, โปรดติดต่อผู้ดูแลระบบ.';
$mesSame = 'อีเมล์นี้มีการลงทะเบียนตัวแทนแล้ว!\n' .$txtEmail.'';

$strSQL = "SELECT * FROM account WHERE Email = '".trim($_POST["txtEmail"])."' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if($objResult)
{
  echo '<script language="JavaScript"> alert("' . $mesSame . '") </script>';
  exit();
}
else
{
  $cmdSQL = "INSERT INTO account (Firstname,Lastname,Nickname,Address,County,Phone,Email,Password,Facebook,LineID,IG,Teamcode)
  VALUES ('$txtFirstname','$txtLastname','$txtNickname','$txtAddress','$selCountry','$txtPhone','$txtEmail','$txtPassword','$txtFacebook','$txtLine','$txtIG','$txtTeamcode')";
  $cmdQuery = mysqli_query($con,$cmdSQL);
  if($cmdQuery)
  {
    echo '<script language="JavaScript"> alert("' . $mesSuccess . '") </script>';
    echo "<script> window.location.href='dadd-member.php'; </script>";
    exit();
  }
  else
  {
    echo '<script language="JavaScript"> alert("' . $mesError . '") </script>';
    exit();
  }
}
mysqli_close($con);
?>
