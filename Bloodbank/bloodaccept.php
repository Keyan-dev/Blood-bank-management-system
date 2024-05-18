<?php
session_start();
if(!isset($_SESSION["auth"]))
{
	echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
	echo '<script>window.location="https://mybbproject.000webhostapp.com/";</script>';
}
$brid=$_GET["brid"];
$bid=$_SESSION["bid"];
include 'php/dbconnect.php';
if(isset($_POST["acceptbtn"]))
{
		$bbquan=NULL;
		$query=mysqli_query($link,"select * from br_details where brid=$brid");
		$res=mysqli_fetch_array($query);	
		$bg=$res["blood_group"];
			if($bg=="O+")
			{
				$b="Opas";
			}
			if($bg=="O-")
			{
				$b="Oneg";
			}
			if($bg=="A+")
			{
				$b="Apas";
			}
			if($bg=="A-")
			{
				$b="Aneg";
			}
			if($bg=="B+")
			{
				$b="Bpas";
			}
			if($bg=="B-")
			{
				$b="Bneg";
			}
			if($bg=="AB+")
			{
				$b="ABpas";
			}
			if($bg=="AB-")
			{
				$b="ABneg";
			}
			$date=date("20y.m.d");			
			$quan=$res["quantity"];
			$query2=mysqli_query($link,"select $b as blood from bloodbank where bid=$bid");
			$res2=mysqli_fetch_array($query2);
			$bbquan=$res2["blood"];
			echo"$bbquan";
			echo"$quan";
			if(isset($bbquan))
			{
				$blooddon=$bbquan-$quan;
				echo "$blooddon";
				$query3=mysqli_query($link,"update bloodbank set $b=$blooddon where bid=$bid");
				$query4=mysqli_query($link,"update br_details set status=1 where brid=$brid");
				$query5=mysqli_query($link,"insert into blood_issued values($quan,$brid,'$date',$bid,'$bg')");
			}
			if($query3)
			{
				if($query4)
				{
					if($query5)
					{
						echo '<script>window.alert("Successfully Updated");</script>';
						echo '<script>window.location="displayreq.php";</script>';
					}
				}
			}
			else
			{
				echo '<script>window.alert("Server Problem Doesnot Deleted");</script>';
				echo '<script>window.location="displayreq.php";</script>';
			}
}			
	if(isset($_POST["cancelbtn"]))
	{
		echo '<script>window.location="displayreq.php";</script>';
	}
		include 'layout/header.php';
		include 'layout/navbar.php';
?>
	<div class="row">
	<div class="col-sm-4">        
	</div>
	<div class="col-sm-4">
				<div class="container-fluid">
				<center><p>Are You Sure to want Issue Blood Request ID=<?= $brid ?></p></center>
				</div>
				<div class="form">
				
				<center><form method="POST" action="bloodaccept.php?brid=<?= $brid; ?>">
						<button type="submit" class="btn btn-success" name="acceptbtn">Yes</button>
						<button type="submit" class="btn btn-danger" name="cancelbtn">no</button>
					</form></center>
				</div>
	</div>
	<div class="col-sm-4">   
	</div>
</div>
</body>
</html>		
