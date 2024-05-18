<?php
session_start();
if(! isset($_SESSION["auth"]))
{
	echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
	echo '<script>window.location="../index.php";</script>';
}
include '../php/dbconnect.php';
include 'layout/header.php';
include 'layout/navbar.php';
?>
		<div class="row" id="display_donor">
			<div class="col-sm-3">
			</div>
		<div class="col-sm-6 well">
			<div class="table-responsive-sm table-striped">
				<table class="table thead-dark">
					<?php
						$res=mysqli_query($link,"select * from br_details");
					?>
				<tr>
					<th>Blood Request ID</th>
					<th>Blood Request BloodBank ID</th>
					<th>Blood Request Name</th>
					<th>BloodGroup</th>
					<th>Quantity</th>
					<th>Request Date</th>
					<th>status</th>
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
							<a href="profilebb.php?bid=<?= $row['bid']; ?>">
 							<?php
 							echo $row["bid"];
 							?></a>
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
							<?php $s=$row["status"];
								if($s==1)
								{
									echo"Blood issued";
								}
								else
								{
									echo"Waiting";
								}
							?>	
						</td>
						<td>
							<a href="deletereq.php?brid=<?= $row['brid']; ?>">
 							delete</a>
						</td>
 					</tr>	
 					<?php }?>		
 			</table>
			</div>
 	</div>
	<div class="col-sm-3">
	</div>
 	</div>	
</body>
</html>
