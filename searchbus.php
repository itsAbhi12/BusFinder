<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="searchstyle2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="menu-bar">
		<ul>
		<li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
		<li><a href="#"><i class="fa fa-user"></i>About Us</a></li>
		<li><a href="#"><i class="fa fa-phone"></i>Contact Us</a></li>
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
<div class="container">
<input type="radio" name="images" id="i1" checked>
<input type="radio" name="images" id="i2">
<input type="radio" name="images" id="i3">
<input type="radio" name="images" id="i4">
	<div class="slide-img" id="one">
		<img src="img/bus1.jpg">
		<label for="i4" class="pre"></label>
		<label for="i2" class="nxt"></label>
	</div>
	<div class="slide-img" id="two">
		<img src="img/bus2.jpg">
		<label for="i1" class="pre"></label>
		<label for="i3" class="nxt"></label>
	</div>
	<div class="slide-img" id="three">
		<img src="img/bus3.jpg">
		<label for="i2" class="pre"></label>
		<label for="i4" class="nxt"></label>
	</div>
	<div class="slide-img" id="four">
		<img src="img/bus4.jpg">
		<label for="i3" class="pre"></label>
		<label for="i1" class="nxt"></label>
	</div>
	<div class="nav">
		<label class="dots" id="dot1" for="i1"></label>
		<label class="dots" id="dot2" for="i2"></label>
		<label class="dots" id="dot3" for="i3"></label>
		<label class="dots" id="dot4" for="i4"></label>
	</div>
</div>
<div class="form-box">
<form action="search.php" method="get">
<center>
		<input type="text" class="search-field src" placeholder="Source" name="source" required>
		<input type="text" class="search-field des" placeholder="Destination" name="des" required><br>
		<input type="submit" class="search-btn" value="Find Bus">
</center>
</form>
</div>
</body>
</html>