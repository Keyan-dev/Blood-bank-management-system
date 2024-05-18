<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	include 'layout/header.php';
	include 'layout/navbar.php';
	include '../php/dbconnect.php';
	$bid=$_SESSION["bid"];
	if(isset($_POST['updatebtn']))
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
		$query="update bloodbank set bname='$name',contact_no=$mobile,city='$city',doorno=$doorno,streetname='$street',district='$district',state='$state' where bid=$bid";
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
	<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 text-center well">
          <h1 class="bg-light" style="float:center;font-family:Times New Roman">Update Details</h1>
         <form method="POST" action="" class="form">
			<?php
			$query="select * from bloodbank where bid=$bid";
			$res=mysqli_query($link,$query);
			$result=mysqli_fetch_array($res);
			?>
            <table style="" class="table-responsive-sm">
              <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;" >BloodBank Name </td>
                <td> : </td>
                <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value=<?= $result['bname']; ?> required>    </div></td>
              </tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Door no</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><input type="text" class="form-control" name="doorno" placeholder="DoorNO" value=<?= $result['doorno']; ?> required></div></td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">StreetName</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><input type="text" class="form-control" name="street" placeholder="StreetName"  value=<?= $result['streetname']; ?> required></div></td>
            </tr>   
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 25px;">State</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><select class="form-control" name="state[]">
							<option  ><?= $result['state']; ?></option>
                          <option >TamilNadu</option>
                      </select></div>
              </td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 25px;">District</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><select  class="form-control" name="district[]" >
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
              <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;" >Conatct NO</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;padding:5px 20px;"><input type="number" min=8000000000 max=9999999999 class="form-control" name="mno" placeholder="Enter Mobileno" value=<?= $result['contact_no']; ?>  required></div></td>
            </tr>
            <tr>
              <td><center><button type="submit" class="btn btn-success"  name="updatebtn" >Submit</button></center>
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
	<div class="col-sm-4">
	</div>
	</div>
</body>
</html>	