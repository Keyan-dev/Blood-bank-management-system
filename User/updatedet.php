<?php
	session_start();
	if(! isset($_SESSION["id"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	include 'layout/header.php';
	include 'layout/navbar.php';
	include '../php/dbconnect.php';
	$id=$_SESSION["id"];
	if(isset($_POST['updatebtn']))
	{
		$name=$_POST["name"];
        $email=$_POST["email"];
        $dob=$_POST["dob"];
        $weight=$_POST["weight"];
        $doorno=$_POST["doorno"];
        $mobile=$_POST["mno"];
        $street=$_POST["street"];
    	$gender=$_POST["radiobt"];
		$city=$_POST["city"];
        foreach($_POST['district'] as $district)
        {
          
        }
        foreach($_POST['state'] as $state)
        {
          
        }
		foreach($_POST['blood_group'] as $bloodg)
        {
          
        }
		$query="update donor_detail set dname='$name',email_id='$email',dob='$dob',mobile=$mobile,weight=$weight,blood_group='$bloodg',city='$city',doorno=$doorno,street_name='$street',district='$district',state='$state',gender='$gender' where did=$id";
		$update=mysqli_query($link,$query);
		if($update)
		{
			echo '<script>window.alert("Successfully Updated");</script>';
			echo '<script>window.location="personaldet.php";</script>';
		}
		else
		{
			echo '<script>window.alert("Server Problem Doesnot Updated");</script>';
			echo '<script>window.location="updatedet.php";</script>';
		}
	}
?>
	<div class="row top-70">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6 text-center well">
          <h1 class="bg-light" style="float:center;font-family:Times New Roman">Update Details</h1>
         <center><form method="POST" action="" class="form">
			<?php
			$query="select * from donor_detail where did=$id";
			$res=mysqli_query($link,$query);
			$result=mysqli_fetch_array($res);
			?>
            <table style="" class="table-responsive-sm">
              <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;" >Name </td>
                <td> : </td>
                <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value=<?= $result['dname']; ?> required>    </div></td>
              </tr>
               <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Email id  </td>
                <td> : </td>
                <td><div class="form-group"style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email id"  value=<?= $result['email_id']; ?> required ></div></td>
             </tr>
             <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Date of Birth</td>
                <td> : </td>
                <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<input type="date" class="form-control" name="dob" id="dob" placeholder="DD.MM.YYYY" value=<?= $result['dob']; ?> required></div></td>
            </tr>
            <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Gender</td>
                <td> : </td>
				<?php
					$male=NULL;
					$female=NULL;
					$other=NULL;
					$m='male';
					$f='female';
					if($result['gender']==$m){
						$male='checked=""';
					}	
					else if($result['gender']==$f){
						$female='checked=""';
					}
					else{
						$other='checked=""';
					}	
				?>
                <td><div class="form-check-inline" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="male" <?php if(isset($male)) echo"$male"; ?> required>Male
				<input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="female" <?php if(isset($female)) echo"$female"; ?> required>Female
				<input type="radio" class="form-check-input"  id="radiobt" name="radiobt" value="others" <?php if(isset($other)) echo"$other"; ?>required>Others</div>
                </td>
            </tr>
            <tr>
				<td style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">bloodGroup</td>
				<td> : </td>
				<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;"><select name="blood_group[]" class="form-control">
						<option ><?= $result['blood_group']; ?></option>
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
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">weight</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <input type="text" class="form-control" name="weight" placeholder="weight" value=<?= $result['weight']; ?> required></div></td>
            </tr>   
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Door no</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <input type="text" class="form-control" name="doorno" placeholder="DoorNO" value=<?= $result['doorno']; ?> required></div></td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">StreetName</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <input type="text" class="form-control" name="street" placeholder="StreetName"  value=<?= $result['street_name']; ?> required></div></td>
            </tr>   
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 25px;">State</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <select class="form-control" name="state[]">
							<option  ><?= $result['state']; ?></option>
                          <option >TamilNadu</option>
                      </select></div>
              </td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 25px;">District</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<select  class="form-control" name="district[]" >
					<option ><?= $result['district']; ?></option>
					<option >select District</option>
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
				<input type="text" class="form-control" name="city" placeholder="Enter city" value=<?= $result['city']; ?> required>
				</div>
							</td>
			</tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;" >MobileNO</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <input type="number" min="6300000000" max="9999999999" class="form-control" name="mno" placeholder="Enter Mobileno" value=<?= $result['mobile']; ?>  required></div></td>
            </tr>
            <tr>
              <td><center><button type="submit" class="btn btn-success"  name="updatebtn" >Submit</button></center>
              </td>
              <td></td>
              <td><center><button type="submit" class="btn btn-danger" name="cancel" id="cancel">Cancel</button></center>
              </td>
            </tr>
        </table>
      </form></center>
        </div>
      </div>
    </div>
	<div class="col-sm-3">
	</div>
	</div>
</body>
</html>	