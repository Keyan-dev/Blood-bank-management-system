<?php
    $selected_page=1;
	include 'layout/header.php';
	include 'layout/navbar.php';
    include 'layout/adminlogin.php';
?>
<div style="padding-top:70px;min-height:80vh;" class="container">
  <div class="container" style="font-size:15px;background-color: #fff; border-radius: 5px; padding: 20px; margin-top: 50px;">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="color: #dc3545;">About Us</h1>
                <p>Welcome to the Blood Bank Management System developed by Karthikeyan. This system was created as a project for the DBMS subject.</p>
                <p>The Blood Bank Management System allows users to:</p>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>Register and manage blood donors</li>
                    <li>Manage blood banks</li>
                    <li>Administer system settings as a superadmin</li>
                </ul>
                <p>We are committed to providing a reliable and efficient platform for blood donation management, ensuring that every drop counts in saving lives.</p>
                <p style="font-size: 14px; margin-top: 20px;" class="d-flex justify-content-center text-center">Version 0.0.1 - &copy; <?php echo date("Y"); ?> Karthikeyan. All rights reserved.</p>
            </div>
        </div>
    </div>
    </div>
	</body>
    <?php
	include 'footer.php';
?>
</html>