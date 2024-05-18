<?php
		include 'php/dbconnect.php';
		$b=NULL;
		$selected_page=2;
?>
<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
	include 'layout/adminlogin.php';
?>
<div class="container-fluid" style="padding-top:50px;min-height:80vh">
    <div class="row">
        <div class="col-md-12">
<div class="container">
    <div class="row justify-content-center align-items-center" style="padding: 20px; margin: 10px;">
        <form class="form-inline w-100" role='form' method="post" action="checkavail.php">
            <div class="form-group">
                <label class="form-label mr-2">Select Blood Group:</label>
                <select name="blood_group" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success ml-2" name="searchBtn">Check Availability</button>
        </form>
    </div>
</div>

			<div class="container table-responsive">      
				<table class="table table-condensed">
						<thead>
						<!-- <th>Bloodbank id</th> -->
						<th>Bloodbank name</th>
						<th>contact number</th>
						<th>Quantity</th>
						<th>Actions</th>
						</thead>
						
						<?php
							if(isset($_POST['searchBtn']))
							{	
								$bloodgroup=$_POST["blood_group"];
								if($bloodgroup=="O+")
								{
									$b="Opas";
								}	
								if($bloodgroup=="O-")
								{
									$b="Oneg";
								}
								if($bloodgroup=="A+")
								{
									$b="Apas";
								}
								if($bloodgroup=="A-")
								{
									$b="Aneg";
								}
								if($bloodgroup=="B+")
								{
									$b="Bpas";
								}
								if($bloodgroup=="B-")
								{
									$b="Bneg";
								}
								if($bloodgroup=="AB+")
								{
									$b="ABpas";
								}
								if($bloodgroup=="AB-")
								{
									$b="ABneg";
								}
								$query="select * from bloodbank where $b>=2";
								$res=mysqli_query($link,$query);
								if (mysqli_num_rows($res) > 0) {
								while($result=mysqli_fetch_array($res)){?>
						<tr>
							<!-- <td>
								<?= $result['bid'];?>
							</td> -->
							<td><a href="displaybb.php?id=<?= $result['bid']; ?>"><?= $result["bname"]; ?></a></td>
							<td><?= $result['contact_no']; ?></td>
							<td><?= $result[$b]; ?></td>
							<td><a href="Reg/requestreg.php?bid=<?= $result['bid']; ?>">
								Request Now</a></td>
						</tr>

<?php
                }
            } else {
                // No records found message
        ?>
                <tr>
                    <td colspan="5" style="text-align:center;">No stocks found.</td>
                </tr>
        <?php
            }
        }
        ?>

					</table>
			</div>
        </div>
    </div>
</div>

</body>
</html>