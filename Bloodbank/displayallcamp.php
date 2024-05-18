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
		<div class="col-sm-6 well">
		<div class="table-responsive-sm table-striped">
			<table class="table thead-dark">
				<?php
 					$res=mysqli_query($link,"select * from camp_detail");
 				?>
				<tr>
					<th>Camp ID</th>
					<th>Bloodbank Id</th>
					<th>Camp Name</th>
					<th>Date</th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td><?php
 							echo $row["camp_id"];
 							?>
 						</td>
						<td><?php
 							echo $row["bid"];
 							?>
 						</td>
 						<td>
							<a href="displaycamp.php?id=<?= $row['camp_id']; ?>">
 							<?php
 							echo $row["cname"];
 							?></a>
 						</td>
 						<td>
							<?php
 							echo $row["date_of_organization"];
 							?>
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
