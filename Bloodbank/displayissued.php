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
		<div class="col-sm-6">
		<div class="well">
		<div class="table-responsive-sm table-striped">
			<table class="table thead-dark">
				<?php
 					$res=mysqli_query($link,"select * from blood_issued");
 				?>
				<tr>
					<th>Blood Request ID</th>
					<th>BloodBank ID</th>
					<th>BloodGroup</th>
					<th>Quantity</th>
					<th>Date</th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td>
							<a href="profilereq.php?brid=<?= $row['brid']; ?>">
							<?php
 							echo $row["brid"];
 							?></a>
 						</td>
 						<td>
							<a href="profilebb.php?bid=<?= $row['bid']; ?>">
 							<?php
 							echo $row["bid"];
 							?></a>
 						</td>
						<td>
							<?php
 							echo $row["blood_group"];
 							?>
 						</td>
 						<td>
							<?php
 							echo $row["quantity"];
 							?>
 						</td>
						<td>
							<?= $row['date_of_issued']; ?>
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
