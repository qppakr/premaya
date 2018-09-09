<?php
/**
 *
 */
class Checkclass
{

	public function Admin()
	{
		session_start();
		if($_SESSION['Class'] == "")
		{
			header("location:login.php");
			exit();
		}

		if($_SESSION['Class'] != "A")
		{
			header("location:403.html");
			session_destroy();
			exit();
		}

		include('controllers/Connect.php');
		$strSQL = "SELECT * FROM account WHERE ID = '".$_SESSION['ID']."' ";
		$objQuery = mysqli_query($con,$strSQL);
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	}

	public function Member()
	{
		session_start();
		if($_SESSION['Class'] == "")
		{
			header("location:login.php");
			exit();
		}

		if($_SESSION['Class'] != "M")
		{
			header("location:403.html");
			session_destroy();
			exit();
		}

		include('controllers/Connect.php');
		$strSQL = "SELECT * FROM account WHERE ID = '".$_SESSION['ID']."' ";
		$objQuery = mysqli_query($con,$strSQL);
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	}
}
?>
