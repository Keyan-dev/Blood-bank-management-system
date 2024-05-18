<?php
	session_start();
	if(! isset($_SESSION["id"]))
	{
		echo '<script>window.alert("Something went wrong.Please authenticate now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	include '../php/dbconnect.php';
	$camp_id=$_GET["id"];
	include 'layout/header.php';
	include 'layout/navbar.php';
	$personaldetail='active';
?>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-6 well">
				<?php
				$query="select * from camp_detail where camp_id=$camp_id";
				$res=mysqli_query($link,$query);
				$result=mysqli_fetch_array($res);
				?>
				<center><h1 class="bg-light" style="float:center;font-family:Times New Roman Matura MT Script Capitals">Camp Details</h1></center>
         <center><form method="POST" action="">
            <table style="" class="table-responsive">
				<tr>
					<td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >BloodBank Id</td>
					<td> : </td>
					<td><?= $result['bid']; ?></td>
				</tr>
				<tr>
                <td style="font-family:Times New Roman;font-size:20px; padding:5px 20px;" >Camp Id</td>
                <td> : </td>
						<td><?= $result['camp_id']; ?></td>
              </tr>
              <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Camp Name</td>
                <td> : </td>
						<td><?= $result['cname']; ?></td>
              </tr>
			  <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Date</td>
                <td> : </td>
						<td><?= $result['date_of_organization']; ?></td>
              </tr>
			  <tr>
                <td style="font-family:Times New RomanTimes New Roman;font-size:20px; padding:5px 20px;" >Place</td>
                <td> : </td>
						<td><?= $result['place_of_organization']; ?></td>
              </tr>
            <tr>
              <td style="font-family:Times New Roman ;font-size:20px;padding:5px 20px;">Address</td>
              <td> : </td>
              <td><?= $result['doorno']; ?>,<?= $result['streetname']; ?>,<?= $result['city']; ?>,<?= $result['district']; ?>,<?= $result['state']; ?>.</td>
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