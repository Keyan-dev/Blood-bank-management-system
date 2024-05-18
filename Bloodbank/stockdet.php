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
?>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-6 well">
					<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">Stock Details</h1></center>
         <center><form method="POST" action="">
		 <?php
			$query="select * from bloodbank where bid=$bid";
			$res=mysqli_query($link,$query);
			$result=mysqli_fetch_array($res);
		 ?>
            <table style="" class="table-responsive table-striped">
					<tr>
					<th style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >BloodGroup</th>
					<th></th>
					<th style="font-family:Times New Roman;font-size:20px; padding:5px 20px;">Quantity</th>
					</tr>
		
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >O+ve</td>
                <td> : </td>
				<td><center><?= $result['Opas']; ?></center></td>
              </tr>
              <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >O-ve</td>
                <td> : </td>
						<td><center><?= $result['Oneg']; ?></center></td>
              </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">A+ve</td>
              <td> : </td>
              <td><center><?= $result['Apas']; ?></center></td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;" >A-ve</td>
              <td> : </td>
              <td><center><?= $result['Aneg']; ?></center></td>
            </tr>
			<tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">AB+ve</td>
              <td> : </td>
              <td><center><?= $result['ABpas']; ?></center></td>
            </tr>
			<tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">AB-ve</td>
              <td> : </td>
              <td><center><?= $result['ABneg']; ?></center></td>
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