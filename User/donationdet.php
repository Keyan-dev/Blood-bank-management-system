<?php
session_start();
	if(! isset($_SESSION["id"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
$did=$_SESSION["id"];
include '../php/dbconnect.php';
include 'layout/header.php';
include 'layout/navbar.php';
?>
		<div class="row top-70" id="display_donor">
			<div class="col-sm-3">
			</div>
		<div class="col-sm-6 well">
		<div class="table-responsive-sm table-striped">
			<table class="table thead-dark">
				<?php
 					$res=mysqli_query($link,"select * from donation where did=$did");
 				?>
				<tr>
					<th>DonorID ID</th>
					<th>Camp Id</th>
					<th>Date</th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td><?php
 							echo $row["did"];
 							?>
 						</td>
						<td><a href="displayc.php?id=<?= $row['camp_id']; ?>"><?php
 							echo $row["camp_id"];
 							?></a>
 						</td>
						<?php
							$camp=$row["camp_id"];
							$query=mysqli_query($link,"select date_of_organization as date from camp_detail where camp_id=$camp");
							$row2=mysqli_fetch_array($query);
						?>
						<td>
							<?= $row2["date"]; ?>
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
