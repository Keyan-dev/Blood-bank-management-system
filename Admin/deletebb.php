<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}	
	include '../php/dbconnect.php';
	$bid=$_GET["bid"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
	if(isset($_POST["deletebtn"]))
	{
		$query="delete from bloodbank where bid=$bid";
		$update=mysqli_query($link,$query);
		if($update)
		{
			echo '<script>window.alert("Successfully Removed");</script>';
			echo '<script>window.location="displaybb.php";</script>';
		}
		else
		{
			echo '<script>window.alert("Server Problem Doesnot Deleted");</script>';
			echo '<script>window.location="index.php";</script>';
		}
	}
	if(isset($_POST["cancelbtn"]))
	{
		echo '<script>window.location="displayowncamp.php";</script>';
	}
?> 
<div class="row">
	<div class="col-sm-4">        
	</div>
	<div class="col-sm-4">
				<div class="container-fluid">
				<center><p>Are You Sure to want Delete BloodBank ID=<?= $bid ?></p></center>
				</div>
				<div class="form">
				
				<center><form method="POST" action="deletebb.php?bid=<?= $bid; ?>">
						<button type="submit" class="btn btn-success" name="deletebtn">Yes</button>
						<button type="submit" class="btn btn-danger" name="cancelbtn">no</button>
					</form></center>
				</div>
	</div>
	<div class="col-sm-4">   
	</div>
</div>

</body>
</html>