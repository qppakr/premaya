<?php
/**
 *
 */
class QueryAll
{

  function CountTeamcode()
  {
    include('controllers/Connect.php');
    $strSQL = "SELECT MAX(Teamcode) FROM account ";
    $objQuery = mysqli_query($con,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    echo implode(",", $objResult);
    mysqli_close($con);
  }

  function InsertMember()
  {
    include('controllers/Connect.php');
    $strPassword = md5($_POST['txtPassword']);
    echo "ok";
    mysqli_close($con);
  }
}

?>
