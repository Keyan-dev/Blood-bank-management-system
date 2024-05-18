<?php
	session_start();
	if(! isset($_SESSION["auth"]))
	{
	echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
	echo '<script>window.location="../index.php";</script>';
	}
	include '../php/dbconnect.php';
	$bid=$_GET["bid"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
?>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-6 well">
					<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">BloodBank Details</h1></center>
         <center><form method="POST" action="">
			<?php
				$query="select * from bloodbank where bid=$bid";
				$res=mysqli_query($link,$query);
				$result=mysqli_fetch_array($res);
			?>
            <table style="" class="table-responsive">
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >BloodBank Id</td>
                <td> : </td>
						<td><?= $result['bid']; ?></td>
              </tr>
              <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >BloodBank Name </td>
                <td> : </td>
						<td><?= $result['bname']; ?></td>
              </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Address</td>
              <td> : </td>
              <td><?= $result['doorno']; ?>,<?= $result['streetname']; ?>,<?= $result['city']; ?>,<?= $result['district']; ?>,<?= $result['state']; ?>.</td>
            </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;" >MobileNO</td>
              <td> : </td>
              <td><?= $result['contact_no']; ?></td>
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