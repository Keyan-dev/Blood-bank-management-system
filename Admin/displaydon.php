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
 					$res=mysqli_query($link,"select * from donor_detail");
 				?>
				<tr>
					<th>Donor ID</th>
					<th>Donor Name</th>
					<th>Donor DOB</th>
					<th>Gender</th>
					<th>Blood Group</th>
					<th></th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td><?php
 							echo $row["did"];
 							?>
 						</td>
 						<td>
							<a href="profile.php?id=<?= $row['did']; ?>">
 							<?php
 							echo $row["dname"];
 							?></a>
 						</td>
 						<td>
							<?php
 							echo $row["dob"];
 							?>
 						</td>
 						<td>
 							<?php
 							echo $row["gender"];
 							?>
 						</td>
 						<td>
 							<?php
 							echo $row["blood_group"];
 							?>
 						</td>
						<td>
							<a href="deletedon.php?did=<?= $row['did']; ?>">
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
