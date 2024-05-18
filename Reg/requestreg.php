<?php
		session_start();
		$bid=$_GET["bid"];
		include '../php/dbconnect.php';
        if(isset($_POST["donerregbtn"]))
        {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $doorno=$_POST["doorno"];
        $mobile=$_POST["mno"];
        $street=$_POST["street"];
    	$gender=$_POST["radiobt"];
		$city=$_POST['city'];
        foreach($_POST['district'] as $district)
        {
          
        }
		foreach($_POST['quantity'] as $quan)
        {
          
        }
		foreach($_POST['bloodgroup'] as $bloodg)
        {
        }
        foreach($_POST['state'] as $state)
        {
          
        }
		$date=date("20y.m.d");
         $query="insert into br_details(name,email_id,mobile,blood_group,city,doorno,street,district,state,gender,quantity,bid,status,date_of_req) values('$name','$email',$mobile,'$bloodg','$city',$doorno,'$street','$district','$state','$gender',$quan,$bid,0,'$date')";
         $inserted=mysqli_query($link,$query); 
        if($inserted)
        {
			echo '<script type="text/javascript">alert("submitted")</script>';
            $query=mysqli_query($link,"select * from br_details");
            while($res=mysqli_fetch_array($query))
			{
				$_SESSION["brid"]=$res["brid"] ;
			}
            echo '<script>window.location="requestid.php";</script>';
        }
       if(!$inserted)
        {
            echo '<script type="text/javascript">alert("Not Inserted! Try Again")</script>';
            echo '<script>window.location="requestreg.php";</script>';	
        }
      }
?>
<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
?>
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
			<div class="well">
				<center><h1 class="bg-light float-center" style="float:center;font-family:Times New Roman">Blood Recipient Request Form</h1></center>
			<form method="POST" action="requestreg.php?bid=<?= $bid; ?>">
				<table style="" class="table-responsive">
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;" >Name </td>
						<td> : </td>
						<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>    </div></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">Email id  </td>
						<td> : </td>
						<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="email" class="form-control" name="email" id="email" placeholder="Enter Email id" required></div></td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">Gender</td>
						<td> : </td>
						<td><div class="form-check-inline" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="male" required> Male <input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="female" required>  Female  <input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="others" required> Others</div>
						</td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">bloodGroup</td>
						<td> : </td>
						<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><select name="bloodgroup[]" class="form-control">
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									</select></div></td>
					</tr>  
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">Quantity</td>
						<td> : </td>
						<td> <div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><select id ="list" class="form-control" name="quantity[]" required>
               						<option value = "1">1</option>
									<option value = "2">2</option>
									<option value = "3">3</option>
             					</select></div>
						</td>
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
								<option value ="NULL" >select state</option>
								<option >TamilNadu</option>
							</select></div>
						</td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">District</td>
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
						<td> <div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="text" class="form-control" name="city" Placeholder="Enter city">
							</div>
						</td>
					</tr>
					<tr>
						<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;" >MobileNO</td>
						<td> : </td>
						<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><input type="number" class="form-control" name="mno" placeholder="Enter Mobileno" required></div></td>
					</tr>
					<tr>
						<td><center><button type="submit" class="btn btn-success"  name="donerregbtn" >Submit</button></center>
						</td>
						<td></td>
						<td><center><button type="submit" class="btn btn-danger" name="cancel" id="cancel">Cancel</button></center>
						</td>
					</tr>
				</table>
		</form>
        </div>
      </div>
    </div>
  
</body>
</html>