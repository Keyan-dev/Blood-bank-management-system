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
	if(isset($_POST["donation"]))
	{
		foreach($_POST['CampId'] as $campid)
        {
          
        }
        foreach($_POST['did'] as $did)
        {
          
        }
        foreach($_POST['quantity'] as $quan)
        {
        }
		$query1="select blood_group as bg from donor_detail where did=$did";
		$query3="insert into donation values($did,$campid,$quan)";
		$query5="select * from donation where did=$did";
		$result3=mysqli_query($link,$query5);
		if($result3)
		{
				while($res5=mysqli_fetch_array($result3))
				{
					$c=$res5["camp_id"];
				}
				if($c==NULL)
				{
						$res1=mysqli_query($link,$query1);
						$res3=mysqli_query($link,$query3);
						$result1=mysqli_fetch_array($res1);
						$bg=$result1["bg"];
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
						$query2="select $b as br from bloodbank where bid=$bid";
						$res2=mysqli_query($link,$query2);
						$result2=mysqli_fetch_array($res2);
						$value=$result2['br']+$quan;
						$query4="update bloodbank set $b=$value where bid=$bid";
						$res4=mysqli_query($link,$query4);
						echo '<script>window.alert("Donotion Added");</script>';
						echo '<script>window.location="stockdet.php";</script>';
				}
				else
				{
					$query6=mysqli_query($link,"select date_of_organization as do from camp_detail where camp_id=$c");
					if($query6)
					{
						$res6=mysqli_fetch_array($query6);
						$date1=date("20y-m-d");
						$dateb=$res6["do"];
						$date2=date($dateb);
						$d1=date_create($date1);
						$d2=date_create($date2);
						$diff=date_diff($d1,$d2);
						$df=$diff->format("%a");
						if($df<52)
						{
							echo '<script>window.alert("Donor is Not Eligible for Donation.Recently Donated");</script>';
						}
						else
						{
							$res1=mysqli_query($link,$query1);
							$res3=mysqli_query($link,$query3);
							$result1=mysqli_fetch_array($res1);
							$bg=$result1["bg"];
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
							$query2="select $b as br from bloodbank where bid=$bid";
							$res2=mysqli_query($link,$query2);
							$result2=mysqli_fetch_array($res2);
							$value=$result2['br']+$quan;
							$query4="update bloodbank set $b=$value where bid=$bid";
							$res4=mysqli_query($link,$query4);
							echo '<script>window.alert("Donotion Added");</script>';
							echo '<script>window.location="stockdet.php";</script>';
						}
					}	
				}
		}
		
	}
?>
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6 well">
			<center><h1 class="bg-light" style="float:center;font-family: Book Antiqua">Add Donation</h1></center>
 				 <center><form method="POST" action="donation.php">
 					  <table style="width:300px;height:300px">
 					  	<tr>
                			<td style="font-family:Book Antiqua;font-size:20px;">Select CampId</td>
                			<td> : </td>
                			<td><div class="form-group"><select class="form-control" name="CampId[]" required>
                    		<?php
                    			$res=mysqli_query($link,"select camp_id from camp_detail where bid=$bid");
                    		?>
                    		<?php
                    			while($row=mysqli_fetch_array($res))
                    		{?>
                    			<option><?php
                      			echo $row["camp_id"];
                    			?></option><?php }?>
                  				</select>  
                  				</div>
                			</td>
              			</tr>
              			<tr>
                			<td style="font-family:Book Antiqua;font-size:20px;">Select Donor Id</td>
                			<td> : </td>
                			<td><div class="form-group"><select class="form-control" name="did[]" required>
                    		<?php
                    			$res=mysqli_query($link,"select did from donor_detail");
                    		?>
                    		<?php
                    			while($row=mysqli_fetch_array($res))
                    		{?>
                    			<option><?php
                      			echo $row["did"];
                    			?></option><?php }?>
                  				</select>  
                  				</div>
                			</td>
              			</tr>
 					  	<tr>
 							<td style="font-family:Book Antiqua;font-size:20px;">Donation Quantity</td>
 							<td> : </td>
 							<td> <select id ="list" class="form-control" name="quantity[]" required>
               						<option value = "1">1</option>
             					</select>
             				</td>
 						</tr>
 						<tr>
 							<td><center><button type="submit" class="btn btn-success" name="donation">Add Donation</button></center></td>
 							<td></td>
 					  </tr>
 					  </table>
 					 </form>
 				</center>
 			</div>	  	
			
		</div>
		<div class="col-sm-3">
		</div>
	</div>	
</body>
</html>
