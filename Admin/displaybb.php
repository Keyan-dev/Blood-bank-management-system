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
 					$res=mysqli_query($link,"select * from bloodbank");
 				?>
				<tr>
					<th>BloodBank id</th>
					<th>BloodBank Name</th>
					<th>Contact_no</th>
					<th></th>
					<th></th>
				</tr>
				<?php
						while($row=mysqli_fetch_array($res))
 						{?>
					<tr>
 						<td><?php
 							echo $row["bid"];
 							?>
 						</td>
 						<td>
 							<?php
 							echo $row["bname"];
 							?>
 						</td>
 						<td>
							<?php
 							echo $row["contact_no"];
 							?>
 						</td>
						<td>
							<a href="profilebb.php?bid=<?= $row['bid']; ?>">
 							view</a>
						</td>
						<td>
							<a href="deletebb.php?bid=<?= $row['bid']; ?>">
 							delete</a>
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
