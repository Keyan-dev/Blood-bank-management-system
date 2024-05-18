<?php
	include 'php/dbconnect.php';
    $selected_page=0;
?>
<?php
	include 'layout/header.php';
	include 'layout/navbar.php';
?>	
<div class="container-fluid" style="padding-top: 70px;">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-6 banner-info text-center text-sm-left px-5 order-sm-2 order-md-1 order-lg-1 order-2">
            <h3>Welcome to Lifesaver Blood Bank</h3>
            <p class="big-text">Saving Lives One Donation at a Time</p>
            <p class="p-text">At Lifesaver Blood Bank, we uphold the fundamental belief that every individual deserves access to safe and reliable blood transfusions. Our mission is to create a tangible difference in the lives of those in need. Join us in this noble endeavor. Whether you're already a donor or considering becoming one, your participation is crucial. Sign in or register as a donor today, and together, let's save lives and spread hope.</p>
            <a class="btn btn-first" style="margin:10px 10px;width:150px;padding:10px;border-radius: 20px;" href="" data-toggle="modal" data-target="#myModal1">Sign in</a>
            <a class="btn btn-first" style="margin:10px 10px;width:150px;padding:10px;border-radius: 20px;" href="Reg/registration.php">Sign up</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 text-center order-sm-1 order-md-2 order-lg-2 order-xs-1">
            <img src="img/p2.png" class="img-fluid" alt="Donate Blood">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center flex-row-reverse-md">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
            <img src="img/p6.jpg" class="img-fluid" alt="Blood Bank">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 banner-info text-center text-sm-left px-5">
            <h3>Join Hands with Us</h3>
            <p class="big-text2">Together, We Can Save Lives</p>
            <p class="p-text">Every drop of blood is a lifeline, a beacon of hope in someone's darkest hour. Your contribution, your selfless act of donating blood, is a gift of life itself. It has the power to change destinies, to bring light where there was once despair. <br>Your donation can make a world of difference to those in need, to families praying for a miracle.
Today, we invite you to register your blood bank and join us in our mission to save lives. Be a part of our lifesaving community, where every heartbeat counts, and every drop of blood matters. Together, let's create a world where no one suffers due to a lack of blood. Register now and be the hero someone is desperately waiting for.</p>
            <a class="btn btn-first" style="margin:10px 10px;width:150px;padding:10px;border-radius: 20px;" data-toggle="modal" data-target="#modal-bloodbank">Sign in</a>
            <a class="btn btn-first" style="margin:10px 10px;width:150px;padding:10px;border-radius: 20px;" href="Reg/registerbloodbank.php">Sign up</a>
        </div>
    </div>
</div>
		<?php include 'layout/bloodbanklogin.php';
			include 'layout/userlogin.php';
			include 'layout/adminlogin.php';
            include 'footer.php'
		?>	        
        
	</body>
</html>