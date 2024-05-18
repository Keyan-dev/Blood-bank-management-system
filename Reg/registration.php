<?php
		session_start();
		$_SESSION["doid"]=NULL;
		include '../php/dbconnect.php';
        if(isset($_POST["donerregbtn"]))
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
		foreach($_POST['blood_group'] as $bloodg)
        {
          
        }
        foreach($_POST['state'] as $state)
        {
          
        }
		$bday = new DateTime($dob);
		$today = new Datetime(date('m.d.y'));
		$diff = $today->diff($bday);
		$age=$diff->y;
        if($age>=18)
		{
			$query="insert into donor_detail(dname,email_id,dob,mobile,weight,blood_group,city,doorno,street_name,district,state,gender) values('$name','$email','$dob',$mobile,$weight,'$bloodg','$city',$doorno,'$street','$district','$state','$gender')";
			$inserted=mysqli_query($link,$query); 
			if($inserted)
			{
				echo '<script type="text/javascript">alert("submitted")</script>';
				$query=mysqli_query($link,"select * from donor_detail where email_id='$email'");
				$res=mysqli_fetch_array($query);
				$_SESSION["doid"]=$res["did"] ;
				echo '<script>window.location="reglanding.php";</script>';
			}
			if(!$inserted)
			{
				echo '<script type="text/javascript">alert("Not Inserted! Try Again")</script>';
				echo '<script>window.location="registration.php";</script>';	
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Invalid date or Age is Not Eligible! Try Again")</script>';
			echo '<script>window.location="registration.php";</script>';
		}
	}	
?>
<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bg-danger text-white">
            <h5>Donor Registration Form</h5>
        </div>
        <div class="card-body" style="width:90%">
            <form method="POST" action="registration.php">
                <!-- Personal Information Section -->
                <div class="form-section">
                    <h4 class="text text-danger">Personal Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="w-100">Name:
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="w-100">Email id:
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email id" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dob" class="w-100">Date of Birth:
                                <input type="date" class="form-control" name="dob" id="dob" required>
                            </label>
                        </div>
                        <div class="form-group col-md6">
                            <label class="w-100">Gender:</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label w-100" for="male">
                                    <input type="radio" class="form-check-input" id="male" name="radiobt" value="male" required> Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label w-100" for="female">
                                    <input type="radio" class="form-check-input" id="female" name="radiobt" value="female" required> Female
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label w-100" for="others">
                                    <input type="radio" class="form-check-input" id="others" name="radiobt" value="others" required> Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="form-section">
                    <h4 class="text text-danger">Contact Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="doorno" class="w-100">Door No:
                                <input type="number" class="form-control" name="doorno" id="doorno" placeholder="Door No" required>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="street" class="w-100">Street Name:
                                <input type="text" class="form-control" name="street" id="street" placeholder="Street Name" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city" class="w-100">City:
                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state" class="w-100">State:
                                <select id="state" class="form-control" name="state[]" required>
                                    <option value="NULL">Select State</option>
                                    <option>TamilNadu</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="district" class="w-100">District:
                                <select id="district" class="form-control" name="district[]" required>
                                    <option value="1">Select District</option>
                                    <!-- Add options for all districts -->
                                </select>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mno" class="w-100">Mobile No:
                                <input type="number" class="form-control" name="mno" id="mno" placeholder="Enter Mobile No" required>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Medical Information Section -->
                <div class="form-section">
                    <h4 class="text text-danger">Medical Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="blood_group" class="w-100">Blood Group:
                                <select name="blood_group[]" class="form-control" id="blood_group">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="weight" class="w-100">Weight:
                                <input type="number" min="50" max="100" class="form-control" name="weight" id="weight" placeholder="Weight" required>
                            </label>
                        </div>
                    </div>
                </div>
				<div class="mt-3 d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-danger" name="donerregbtn" style="width:200px;">Register</button>
				</div>
            </form>
        </div>
    </div>
</div>
<br>
  
</body>
</html>