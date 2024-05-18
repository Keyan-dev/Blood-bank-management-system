<?php
	session_start();
	if(! isset($_SESSION["id"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="https://mybbproject.000webhostapp.com/";</script>';
	}
	include '../php/dbconnect.php';
	$id=$_SESSION["id"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
?>
	<div class="row top-70">
		<div class="col-sm-3">
			
		</div>
	<div class="col-sm-6">
					<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">Your Details</h1></center>
         <center><form method="POST" action="">
		 <?php
			$query="select * from donor_detail where did=$id";
			$res=mysqli_query($link,$query);
			$result=mysqli_fetch_array($res);
		 ?>
            <table style="" class="table-responsive">
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >Donor Id</td>
                <td> : </td>
				<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<?= $result['did']; ?></td></div>
              </tr>
              <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Name </td>
                <td> : </td>
				<td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<?= $result['dname']; ?></td></div>
              </tr>
               <tr>
                <td style="font-family:Times New Roman;font-size:20px;padding:5px 20px;">Email id  </td>
                <td> : </td>
                <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<?= $result['email_id']; ?></td></div>
             </tr>
             <tr>
                <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Date of Birth</td>
                <td> : </td>
                <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
				<?= $result['dob']; ?></td></div>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">bloodGroup</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <?= $result['blood_group']; ?></td></div>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">weight</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <?= $result['weight']; ?></td></div>
            </tr>   
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Address</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <?= $result['doorno']; ?>,<?= $result['street_name']; ?>,<?= $result['city']; ?>,<?= $result['district']; ?>,<?= $result['state']; ?>.</td></div>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;" >MobileNO</td>
              <td> : </td>
              <td><div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
			  <?= $result['mobile']; ?></td>
			  </div>
            </tr>
            <tr>
              
              </td>
              <td></td>
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