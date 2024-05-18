<?php
session_start();
if(! isset($_SESSION["auth"]))
{
	echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
	echo '<script>window.location="../index.php";</script>';
}
$bid=$_SESSION["bid"];
include '../php/dbconnect.php';
include 'layout/header.php';
include 'layout/navbar.php';
?>
		<div class="row" id="display_donor">
			<div class="col-sm-3">
			</div>
		<div class="col-sm-6">
		<div class="well">
		<div class="table-responsive-sm table-striped">
			<table class="table thead-dark">
				<?php
 					$res=mysqli_query($link,"select * from br_details where bid=$bid and status=0");
 				?>
				<tr>
					<th>Blood Request ID</th>
					<th>Blood Request Name</th>
					<th>BloodGroup</th>
					<th>Quantity</th>
					<th>Date</th>
					<th></th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td><?php
 							echo $row["brid"];
 							?>
 						</td>
 						<td>
							<a href="profilereq.php?brid=<?= $row['brid']; ?>">
 							<?php
 							echo $row["name"];
 							?></a>
 						</td>
 						<td>
							<?php
 							echo $row["blood_group"];
 							?>
 						</td>
						<td>
							<?= $row['quantity']; ?>
						</td>
						<td>
							<?= $row['date_of_req']; ?>
						</td>
						<td>
							<a href="bloodaccept.php?brid=<?= $row['brid']; ?>">
 							accept</a>
						</td>
 					</tr>	
 					<?php }?>		
 			</table>
 		</div>
			</div>
 	</div>
	<div class="col-sm-3">
	</div>
 	</div>	
</body>
</html>
