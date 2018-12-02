<?php
include("controllers/Connect.php");
$strSQL = "DELETE FROM account WHERE ID = '".$_GET["ID"]."'";
$objQuery = mysqli_query($con,$strSQL);
if($objQuery)
{
  echo "<script>alert('ลบข้อมูลสำเร็จ');
  window.location.href='DMEMBER.php';
  </script>";
}
else {
  echo "<script>alert('เกิดข้อผิดพลาด ไม่สามารถลบข้อมูลได้');
  window.location.href='DMEMBER.php';
  </script>";
}
mysqli_close($con);
?>
