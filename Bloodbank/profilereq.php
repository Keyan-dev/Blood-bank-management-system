<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	include '../php/dbconnect.php';
	$brid=$_GET["brid"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
?>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-6 well">
					<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">Blood Request Details</h1></center>
         <center><form method="POST" action="">
			<?php
				$query="select * from br_details where brid=$brid";
				$res=mysqli_query($link,$query);
				$result=mysqli_fetch_array($res);
			?>
            <table style="" class="table-responsive">
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >Blood Request Id</td>
                <td> : </td>
						<td><?= $result['brid']; ?></td>
				</tr>
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >BloodBank Id</td>
                <td> : </td>
						<td><?= $result['bid']; ?></td>
              </tr>
              <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Name </td>
                <td> : </td>
						<td><?= $result['name']; ?></td>
              </tr>
			  <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Email_id</td>
                <td> : </td>
						<td><?= $result['email_id']; ?></td>
              </tr>
			  <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Gender</td>
                <td> : </td>
						<td><?= $result['gender']; ?></td>
              </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Address</td>
              <td> : </td>
              <td><?= $result['doorno']; ?>,<?= $result['street']; ?>,<?= $result['city']; ?>,<?= $result['district']; ?>,<?= $result['state']; ?>.</td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;" >MobileNO</td>
              <td> : </td>
              <td><?= $result['mobile']; ?></td>
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