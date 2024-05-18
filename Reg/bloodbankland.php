<?php
		session_start();
		if(! isset($_SESSION["bbid"]))
		{
			echo '<script>window.alert("Something went wrong.Please Restart the Step now");</script>';
			echo '<script>window.location="../index.php";</script>';
		}
		$bid=$_SESSION["bbid"];
		include '../php/dbconnect.php';
        if(isset($_POST["passbtn"]))
        {  
				$password1=$_POST["pass1"];
                $password2=$_POST["pass2"];
                if($password1==$password2)
                {
                    $iquery=mysqli_query($link,"update bloodbank set password='$password1',Opas=0,Oneg=0,Apas=0,Aneg=0,Bpas=0,Bneg=0,ABpas=0,ABneg=0 where bid=$bid");
                    if($iquery)
                    {
                        echo'<script>alert("successfully Set password.Please sign in to access Your Details.");</script>';
                        echo '<script>window.location="../index.php";</script>';
						session_destroy();

                    }
                    if(!$iquery)
                    {
						echo'<script>alert("Server Problem");</script>';
                        echo'<script type="text/javascript">window.location="bloodbankland.php";</script>';

                    }
                }
                else
                {
                    echo'<script>alert("Password Does NOt match");</script>';
                    echo'<script>window.location="bloodbankland.php";</script>';
                }
            
        }   
      ?>  
<html>
<head>
	<title>Blood Bank Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="Bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.4.1/css/bootstrap.min.css">
	<script src="bootstrap-3.4.1/js/jquery.min.js"></script>
	<script src="bootstrap-3.4.1/js/bootstrap.min.js"></script>
</head>
<body>			  
<nav class="navbar navbar-expand-sm  bg-light text-light">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuicon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>	
					<a href=""><img class="logo" src="img/logo.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="menuicon">
				<ul class="nav navbar-nav navbar-right">
				</ul>
			</div>
			</div>
</nav>
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-dialog-centered bg-light">
                    <div class="modal-header">
                        <h3>Set Password</h3>
						<button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
						<form action="" method="POST" class="login-form">
                            <div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
                                Password 
								<input type="password" style="margin:0; width:300px;" name="pass1" placeholder="enter password" class="form-control" >
                            </div>
                            <div class="form-group" style="font-family:Times New Roman;font-size:20px;margin:0;padding:5px 20px;">
                                Re Enter Password
								<input type="password" style="margin:0; width:300px;"  name="pass2" placeholder="re-enter Password" class="form-control" >
                            </div>
                            <center><button type="submit" class="btn" name="passbtn" >Submit</button></center>
                        </form>
					</div>	
					<div class="modal-footer">	
                    </div>
                 </div>
            </div>
        </div>

        <div class="row" id="successenter">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <p>You Are Successfully Registered</p>
                <p>Your Registration Id is::
                    <?php echo"$bid"?></p>
                    <p>One More step is Needed.Click SetPassword</p>
                <a class="btn btn-first" href="" data-toggle="modal" data-target="#myModal1">SetPassword</a>
            <div class="col-sm-4">
            </div>
        </div>
        <script type="text/javascript">
            //$('#successenter').hide();
        </script>
</body>
</html>