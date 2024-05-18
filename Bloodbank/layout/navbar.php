<nav class="navbar navbar-expand-lg bg-light text-light">
    <div class="container-fluid">
		<a class="navbar-brand" href="#"><img class="logo" src="img/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuicon">
            <span class="navbar-toggler-icon"><i class="fas fa-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="menuicon">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-info-circle"></i>&nbsp;Display Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="personaldet.php"><i class="fas fa-user"></i>&nbsp;Personal Details</a>
                        <a class="dropdown-item" href="stockdet.php"><i class="fas fa-cube"></i>&nbsp;Stock Details</a>
                        <a class="dropdown-item" href="displaydon.php"><i class="fas fa-hand-holding-heart"></i>&nbsp;Donor Details</a>
                        <a class="dropdown-item" href="displayissued.php"><i class="fas fa-hand-holding-medical"></i>&nbsp;Blood Issued Details</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="updatedet.php"><i class="fas fa-edit"></i>&nbsp;Update Personal Details</a></li>
                <li class="nav-item"><a class="nav-link" href="donation.php"><i class="fas fa-plus"></i>&nbsp;Add Donation</a></li>
                <li class="nav-item"><a class="nav-link" href="displayreq.php"><i class="fas fa-hand-paper"></i>&nbsp;Blood Request</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-campground"></i>&nbsp;Camp Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="createcamp.php"><i class="fas fa-campground"></i>&nbsp;Create Camp</a>
                        <a class="dropdown-item" href="displayowncamp.php"><i class="fas fa-campground"></i>&nbsp;Display Your Camps</a>
                        <a class="dropdown-item" href="displayallcamp.php"><i class="fas fa-campground"></i>&nbsp;Display All Camps</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
