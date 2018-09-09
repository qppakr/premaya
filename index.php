<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  require_once('controllers/Connect.php');

  $strNum = "SELECT MAX(Membercode) FROM account WHERE Teamcode = '01' ";
  $objQuery2 = mysqli_query($con,$strNum);
  $objNum = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);

  $Num = implode("",$objNum);
  echo $Num;
  $Num++;
  echo $Num;
  ?>
</body>
</html>
