<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="padding:0;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img class="logo" src="img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuicon" aria-controls="menuicon" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuicon">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link <?php if($selected_page == 0) echo 'selected'; ?>" href="index.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
            <li class="nav-item"><a class="nav-link <?php if($selected_page == 1) echo 'selected'; ?>" href="about.php"><i class="fas fa-info-circle"></i>&nbsp;About</a></li>
            <li class="nav-item"><a class="nav-link <?php if($selected_page == 2) echo 'selected'; ?>" href="checkavail.php"><i class="fas fa-search"></i>&nbsp;Find</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#modal-admin"><i class="fas fa-user"></i>&nbsp;Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
