<?php
		session_start();
		$_SESSION["bbid"]=NULL;
		include '../php/dbconnect.php';
        if(isset($_POST["bbregbtn"]))
        {
        $name=$_POST["name"];
        $doorno=$_POST["doorno"];
        $mobile=$_POST["mno"];
        $street=$_POST["street"];
		$city=$_POST["city"];
        foreach($_POST['district'] as $district)
        {
          
        }
        foreach($_POST['state'] as $state)
        {
          
        }
         $query="insert into bloodbank(bname,contact_no,city,doorno,streetname,district,state) values('$name',$mobile,'$city',$doorno,'$street','$district','$state')";
         $inserted=mysqli_query($link,$query); 
        if($inserted)
        {
			echo '<script type="text/javascript">alert("submitted")</script>';
            $query=mysqli_query($link,"select * from bloodbank");
            while($res=mysqli_fetch_array($query)){
				$_SESSION["bbid"]=$res["bid"] ;
				}
				
				echo '<script>window.location="bloodbankland.php";</script>';
        }
       if(!$inserted)
        {
            echo '<script type="text/javascript">alert("Not Inserted! Try Again")</script>';
            echo '<script>window.location="registerbloodbank.php";</script>';	
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
            <h5>BloodBank Registration Form</h5>
        </div>
        <div class="card-body" style="width:90%;">
            <form method="POST" action="registerbloodbank.php" style="width:100%">
                <div class="form-section">
                    <h4 class="text text-danger">BloodBank Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name" class="w-100">BloodBank Name:
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="doorno" class="w-100">Door no:
                                <input type="text" class="form-control" name="doorno" placeholder="DoorNO" required>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="street" class="w-100">Street Name:
                                <input type="text" class="form-control" name="street" placeholder="StreetName" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="state" class="w-100">State:
                                <select id="state" class="form-control" name="state[]" required>
                                    <option value="NULL">select state</option>
                                    <option>TamilNadu</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="district" class="w-100">District:
                                <select id="district" class="form-control" name="district[]" required>
                                    <option value="1">select District</option>
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
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city" class="w-100">City:
                                <input type="text" class="form-control" name="city" placeholder="Enter city" required>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mno" class="w-100">Mobile NO:
                                <input type="number" min="6666666666" max="9999999999" class="form-control" name="mno" placeholder="Enter Mobile no" required>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex align-items-end justify-content-end">
                    <button type="submit" class="btn btn-danger" name="bbregbtn" style="width:200px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
</body>
</html>