<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
	session_start();
	$_SESSION["auth"]=NULL;
	$flag=NULL;
	include '../php/dbconnect.php';
	if(isset($_POST["usrbtn"])) 
	{
		$usname=$_POST["username"];
		$password=$_POST["password"];
		$query1=mysqli_query($link,"select * from donor_detail");
		while($res1=mysqli_fetch_array($query1))
		{
			if($usname==$res1['email_id'] and $password==$res1['password'])
			{
				$_SESSION["id"]=$res1['did'];
				// $name=$res1['dname'];
				echo $name;
				$_SESSION["auth"]="verify";
				echo '<script>window.location="index.php";</script>';
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
	<div class="container top-70" id="new">
			<div class="row w-100">
				<div class="col-md-6 justify-content-center d-flex flex-column">
					<h1>Welcome back user,</h1>
					<p class="p-text">Here, you can conveniently access your personal details and manage your account. Whether you want to edit your information, view your current details, check upcoming campaigns, or log out securely, you'll find everything you need right here. Keep your information up-to-date and stay informed about upcoming events to make a difference in your community.</p>
				</div>
				<div class="col-md-6 justify-content-end align-items-end d-flex flex-column">
					<img src="img/p5.jpg" class="img-fluid" >
				</div>
			</div>
		</div>
</body>
</html>	