<?php include '../php/dbconnect.php';
$date=date("20y.m.d");  
$query2="select count(camp_id) as count from camp_detail where date_of_organization>'$date'";
$count=0; 
$i=mysqli_query($link,$query2);
$res2=mysqli_fetch_array($i);
?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img class="logo" src="img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuicon" aria-controls="menuicon" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuicon">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fas fa-home"></i>&nbsp;Home</a>
                </li>
                <li class="nav-item">
                    <a href="personaldet.php" class="nav-link"><i class="fas fa-user"></i>&nbsp;Personal Details</a>
                </li>
                <li class="nav-item">
                    <a href="updatedet.php" class="nav-link"><i class="fas fa-edit"></i>&nbsp;Update Details</a>
                </li>
                <li class="nav-item">
                    <a href="displaycamp.php" class="nav-link"><i class="fas fa-calendar-alt"></i>&nbsp;Show Upcoming Camps<span class="badge badge-secondary ml-1"><?= $res2["count"]; ?></span></a>
                </li>
                <li class="nav-item">
                    <a href="donationdet.php" class="nav-link"><i class="fas fa-tint"></i>&nbsp;Donation Details</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

