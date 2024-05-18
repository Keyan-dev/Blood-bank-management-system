<html>
<head>
	<title> Blood Bank Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="dovisit.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuicon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>	
					<a href=""><img class="logo" src="logo.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="menuicon">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="bloodbankvisit.php">Home</a></li>
					<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Display Details</a>
							<ul class="dropdown-menu">
								<li><a href="display.html">Personal Details</a></li>
								<li><a href="">Stock Details</a></li>
								<li><a href="displaydon.php">Donor_details</a></li>
							</ul>
					</li>
					<li><a href="">Update Personal Details</a></li>
					<li><a href="">Add Donation</a></li>
					<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Camp Details</a>
						<ul class="dropdown-menu">
							<li><a href="">Create Camp</a></li>
							<li><a href="">Delete Camp</a></li>
							<li><a href="">Update Camp Details</a></li>
							<li><a href="">Display All Camps</a></li>
						</ul>	

					</li>
					<li><a href="http://localhost/BB_new/">LogOut</a></li>
				</ul>
			</div>
			</div>
		</nav>
		<div class="container" id="123">
			<div class="row">
				<div class="col-sm-6 banner-info">
					<h1>Welcome Back BloodBank Admin,</h1>
					<p class="p-text">You can access Your Personal Details</p>
					<p class="p-text">in this page also check for Your credentials</p>
				</div>
				<div class="col-sm-6 banner-image">
					<img src="p5.jpg" class="img-responsive">
				</div>
			</div>
		</div>
<div class="modal fade text-center" id="myModal1">
      	<div class="lead-form">
      		<div class="title-box">
      			<h3>Login</h3>
      			<p>To access Your Details</p>
      		</div>
      	</div>
      	<form>
      		<label>user id*</label>
      		<input type="text" placeholder="Enter Your name" class="input-box">
      		<label>password*</label>
      		<input type="password" placeholder="Enter Your Email" class="input-box">
      		<button type="button" type="submit-btn">Login</button>
      	</form>	
</div>  

	</body>

</html>