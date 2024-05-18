<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
	session_start();
	$flag=NULL;
	include '../php/dbconnect.php';
	if(isset($_POST["resetbtn"])) 
	{
		$usname=$_POST["username"];
		$dob=$_POST["dob"];
		echo $dob;
		echo $usname;
		$query1=mysqli_query($link,"select * from donor_detail");
		while($res1=mysqli_fetch_array($query1))
		{
			if($usname==$res1['email_id'])
			{
				if($dob==$res1['dob'])
				{	
					$_SESSION["id"]=$res1['did'];
					echo '<script>window.alert("verified Successfully");</script>';
					echo '<script>window.location="setpass.php";</script>';
				}
			}
		else
		{
			$flag=1;
		}	
	}
	if(isset($flag))
	{
		echo '<script>window.alert("Invalid User Details");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
}
?>