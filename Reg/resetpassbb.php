<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
	session_start();
	$flag=NULL;
	include '../php/dbconnect.php';
	if(isset($_POST["resetbtn"])) 
	{
		$bid=$_POST["id"];
		$name=$_POST["name"];
		$query1=mysqli_query($link,"select * from bloodbank");
		while($res1=mysqli_fetch_array($query1))
		{
			if($bid==$res1['bid'])
			{
				if($name==$res1['bname'])
				{	
					$_SESSION["id"]=$res1['bid'];
					echo '<script>window.alert("verified Successfully");</script>';
					echo '<script>window.location="setpassbb.php";</script>';
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