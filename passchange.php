<html>
<head>
<style>
	body{
		background-color:royalblue;
		background:linear-gradient(to bottom,#270430,#4f49c4);
		font-family:calibri;
	
	}
	.content{
			width:360px;
			height:400px;
			position:absolute;
			top:150px;
			left:470px;
			text-align:center;
			background-color:#457ff7;
			border-radius:15px;
			}
	.txtbox{
			width:260px;
			height:40px;
			background-color:#f1f1f1b3;
			border-radius:10px;
			margin:30px auto;	
	}
	.txtbox input{
			background-color:none;
			border:none;
			outline:none;
			text-align:center;
			width:90%;
			line-height:37px;
			font-size:16px;
			font-family:"Montserrat",sans-serif;
			color;#333;
	}
	.btn{
			width:260px;
			height:40px;
			border-radius:10px;
			margin: 14px auto;
			display:block;
			background-color:#f1f1f1b3;
			font-size:16px;
			font-family:"Montserrat",sans-serif;
			cursor:pointer;	
	}
	.btn:hover{
		background:#15124d;
		color:white;
		
	}
</style>
</head>
<body>
	<div class="content">
		<form action="changepassword.php" method="POST">
			<div class="txtbox">
				<input type="password" placeholder="Old Password" required>
			</div>
			<div class="txtbox">
				<input type="password" placeholder="New Password" name="pass" required>
			</div>
			<div class="txtbox">
				<input type="password" placeholder="Confirm New Password " required>
			</div>
			<input type="submit" value="Change Password" class="btn" name="sub">
		</form>
	</div>
</body>
</html>