<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
	echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
	echo '<script>window.location="../index.php";</script>';
	}
	include '../php/dbconnect.php';
	$bid=$_SESSION["bid"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
	if(isset($_POST["campcreatebtn"]))
	{
		$cname=$_POST["cname"];
		$dor=$_POST["dorg"];
		$por=$_POST["porg"];
		$street=$_POST["street"];
		$doorno=$_POST["doorno"];
		$city=$_POST["city"];
        foreach($_POST['district'] as $district)
        {
          
        }
        foreach($_POST['state'] as $state)
        {
          
        }
		$query="insert into camp_detail(cname,date_of_organization,place_of_organization,doorno,streetname,district,state,city,bid) values('$cname','$dor','$por',$doorno,'$street','$district','$state','$city',$bid)";
		$insert=mysqli_query($link,$query);
		if($insert)
		{
			echo '<script>window.alert("Successfully Added");</script>';
			echo '<script>window.location="displayowncamp.php";</script>';
		}
		else
		{
			echo '<script>window.alert("Server Problem Doesnot added");</script>';
			echo '<script>window.location="createcamp.php";</script>';
		}
	}
?>
	<div class="row bg-white" id="addcamp">
 			<div class="col-sm-3">
 			</div>
 			<div class="col-sm-6 well">
 					<center><h1 class="bg-light" style="float:center;font-family:Times New Roman">Add Camp</h1></center>
 				 <center><form method="POST" action="createcamp.php">
 					  <table style="">
 					  	<tr>
 							  <td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;" >Camp Name</td>
 							  <td> : </td>
 							  <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Camp Name" required>    </div></td>
 					  	</tr>
 						 <tr>
 							  <td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">Date of Orgainization</td>
 							  <td> : </td>
 							  <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
    							<input type="date" class="form-control" name="dorg" id="dorg" placeholder="DD.MM.YYYY" required></div></td>
 						</tr>
 						<tr>
 							  <td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;" >Place Of organization</td>
 							  <td> : </td>
 							  <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="porg" id="porg" placeholder="Enter Place" required>    </div></td>
 					  	</tr>
 						<tr>
 							<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">Door no</td>
 							<td> : </td>
 							<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="doorno" placeholder="DoorNO" required></div></td>
 						</tr>
 						<tr>
 							<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">StreetName</td>
 							<td> : </td>
 							<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="street" placeholder="StreetName" required></div></td>
 						</tr>		
 						<tr>
 							<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">State</td>
 							<td> : </td>
 							<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><select id ="list" class="form-control" name="state[]" required>
 									<option >select state</option>
               						<option >TamilNadu</option>
             					</select></div>
             				</td>
 						</tr>
 						<tr>
 							<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"">District</td>
 							<td> : </td>
 							<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><select id ="list" class="form-control" name="district[]" required>
 									<option value = "1">select District</option>
               						<option>Ariyalur</option><option>Chengalpattu</option><option>Chennai</option>
                                <option>Coimbatore</option><option>Cuddalore</option><option>Dharmapuri</option>
                                <option>Dindigul</option><option>Erode</option><option>Kallakurichi</option>
                                <option>Kanchipuram</option><option>Kanniyakumari</option><option>Karur</option>
                                <option>Krishnagiri</option><option>Madurai</option><option>Nagapattinam</option>
                                <option>Namakkal</option><option>Nilgiris</option><option>Perambalur</option>
                                <option>Pudukkottai</option><option>Ramanathapuram</option><option>Ranipet</option>
                                <option>Salem</option><option>Sivagangai</option><option>Tenkasi</option>
                                <option>Thanjavur</option><option>Theni</option><option>Thoothukudi</option>
                                <option>Tiruchirappalli</option><option>Tirunelveli</option><option>Tirupattur</option><option>Tiruvannamalai</option>
                                <option>Tiruppur</option><option>Tiruvallur</option><option>Tiruvarur</option>
                                <option>Vellore</option><option>Viluppuram</option><option>Virudhunagar</option>
             					</select></div>
 							</td>
            			</tr>
 						<tr>
							<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">City</td>
							<td> : </td>
							<td> <div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
								<input type="text" class="form-control" name="city" placeholder="Enter city" required>
								</div>
							</td>
						</tr>
 						<tr>
 							<td><center><button type="submit" class="btn btn-success" name="campcreatebtn" >Submit</button></center></td>
 							<td></td>
 					  </tr>
				</table>
			</form>
		  </center>
 		</div>
		<div class="col-sm-3">
		</div>
 	</div>
</body>
</html>	