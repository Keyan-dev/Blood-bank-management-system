<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	include '../php/dbconnect.php';
	$id=$_GET["id"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
?>
	<div class="row">
		<div class="col-sm-3">
			</div>
		<div class="col-sm-6 well">
			<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">Donor Details</h1></center>
			<center><form method="POST" action="">
					<?php
							$query="select * from donor_detail where did=$id";
							$res=mysqli_query($link,$query);
							$result=mysqli_fetch_array($res);
					?>
				<table style="" class="table-responsive">
					<tr>
						<td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >Donor Id</td>
						<td> : </td>
						<td><?= $result['did']; ?></td>
					</tr>
					<tr>
						<td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Name </td>
						<td> : </td>
						<td><?= $result['dname']; ?></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Email id  </td>
						<td> : </td>
						<td><?= $result['email_id']; ?></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Date of Birth</td>
						<td> : </td>
						<td><?= $result['dob']; ?></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">bloodGroup</td>
						<td> : </td>
						<td><?= $result['blood_group']; ?></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">weight</td>
						<td> : </td>
						<td><?= $result['weight']; ?></td>
					</tr>   
					<tr>
						<td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Address</td>
						<td> : </td>
						<td><?= $result['doorno']; ?>,<?= $result['street_name']; ?>,<?= $result['city']; ?>,<?= $result['district']; ?>,<?= $result['state']; ?>.</td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;" >MobileNO</td>
						<td> : </td>
						<td><?= $result['mobile']; ?></td>
					</tr>
					
				</table>
				</form></center>
		</div>	  
		<div class="col-sm-3">
		</div>
	</div>
</body>
</html>	