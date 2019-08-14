<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="menu-bar">
		<ul>
		<li class="active"><a href="frontpage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
		<li><a href="#"><i class="fa fa-user"></i>About Us</a></li>
		<li><a href="contactus.php"><i class="fa fa-phone"></i>Contact Us</a></li>
		<li><a href="#"><i class="fa fa-user"></i>Profile</a>
			<div class="sub-menu">
				<ul>
				<li><a href="passchange.php">Change Password</a></li>
				<li><a href="logoutuser.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
				</ul>
			</div>
		</li>
		<div class="user"><?php
							$user=$_SESSION['logger'];
							echo "Welcome <br>";
							echo "$user";

						?>
		</div>
		</ul>

</div>
<div class="leftbar">	
<h1>RESERVED</h1>
<button class="button" style="vertical-align:middle"><span><a href="reservebus.php">Check Here</a></span></button>
</div>
<div class="rightbar">
<h1>UNRESERVED</h1>
<button class="button" style="vertical-align:middle"><span><a href="searchbus.php">Check Here</a></span></button>
</div>
</body>
</html>