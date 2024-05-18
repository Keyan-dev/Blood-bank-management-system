<?php
	session_start();
	include '../php/dbconnect.php';
	if(isset($_POST["adminbtn"])) 
	{
		$uname=$_POST["Adminusername"];
		$pass=$_POST["Adminpass"];
		$query=mysqli_query($link,"select * from admin");
		while($res=mysqli_fetch_array($query))
		{
			if(($uname==$res['name'] and $pass==$res['password']))
			{
				$_SESSION["auth"]="verify";
				echo '<script>window.location="index.php";</script>';
			}	
			else
			{	
				echo '<script>window.alert("Invalid Admin Details");</script>';
				echo '<script>window.location="../index.php";</script>';
			}	
		}
	}
	include 'layout/header.php';
	include 'layout/navbar.php';
?>
	<div class="container" id="new">
			<div class="row">
				<div class="col-sm-6 banner-info">
					<h1>Welcome Back Admin,</h1>
					<p class="p-text">You can access and modify all the Details</p>
					<p class="p-text">in this page </p>
				</div>
				<div class="col-sm-6 banner-image">
					<img src="img/p5.jpg" class="img-responsive">
				</div>
			</div>
		</div>	
</body>
</html>
