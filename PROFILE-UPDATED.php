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
$txtPMC = $_POST["txtPMC"];
$mesSuccess = 'บันทึกข้อมูลสำเร็จ!';
$mesSame = 'รหัส PMC ซ้ำกับผู้ใช้อื่น, กรุณากำหนด PMC ใหม่อีกครั้ง. \nหากคุณทำการแก้ไขข้อมูลส่วนตัวกรุณาเปลี่ยน PMC ใหม่ทุกครั้ง.';
$mesError = 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล, โปรดติดต่อผู้ดูแลระบบ.';

$strSQL = "SELECT * FROM account WHERE ID = '$txtID' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if($objResult["Membercode"] != "000"){

  $cmdSQL = "UPDATE account SET Firstname='$txtFirstname' ,Lastname='$txtLastname' ,Nickname='$txtNickname' ,Phone='$txtPhone' ,LineID='$txtLine' ,Facebook='$txtFacebook' ,IG='$txtIG' ,Address='$txtAddress' ,County='$selCountry' WHERE ID = '$txtID'";
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
  $strSQLx = "SELECT * FROM account WHERE PMC = '$txtPMC' ";
  $objQueryx = mysqli_query($con,$strSQLx);
  $objResultx = mysqli_fetch_array($objQueryx,MYSQLI_ASSOC);
  if($objResultx){
    echo '<script language="JavaScript"> alert("' . $mesSame . '") </script>';
    echo "<script> window.location.href='PROFILE.php'; </script>";
  }
  else{
    $cmdSQL = "UPDATE account SET Firstname='$txtFirstname' ,Lastname='$txtLastname' ,Nickname='$txtNickname' ,Phone='$txtPhone' ,LineID='$txtLine' ,Facebook='$txtFacebook' ,IG='$txtIG' ,Address='$txtAddress' ,County='$selCountry' ,PMC='$txtPMC' WHERE ID = '$txtID'";
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

}

mysqli_close($con);
?>
