<?php
	session_start();
	if(! isset($_SESSION["brid"]))
	{
		echo '<script>window.alert("Something went wrong.Please Restart the Step now");</script>';
		echo '<script>window.location="../index.php";</script>';
	}
	$brid=$_SESSION["brid"];
	include 'layout/header.php';
	include 'layout/navbar.php';
?>
        <div class="row" id="successenter">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
				<div class="well">
                <p>Your Request has been Submitted </p>
                <p>Your Request Id is::
                    <?php echo"$brid"?></p>
                    <p>Note For future Reference.Thank You :)</p>
                <a class="btn btn-first" href="../checkavail.php">Go To search Page</a>
				</div>
			</div>	
            <div class="col-sm-4">
            </div>
        </div>
        <?php
			if(isset($brid))
			{
				session_destroy();
			}
		?>
</body>
</html>