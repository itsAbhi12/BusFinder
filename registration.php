 <html>
 <head>
 <title>Welcome To Registration Form</title>
 <script>
 function registration()
 {
		var i=parseInt("1");
		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var pwd= document.getElementById("t4").value;			
		var cpwd= document.getElementById("t5").value;
		var phno= document.getElementById("t6").value;
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[a-zA-Z]+\.?/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(name=='')
		{
			alert('Please enter your name');
			return false;
		}
		/*else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}*/
		else if(email=='')
		{
			alert('Please enter your user email id');
			return false;
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
			return false;
		}
		/*else if(uname=='')
		{
			alert('Please enter the user name.');
		}
		else if(!letters.test(uname))
		{
			alert('User name field required only alphabet characters');
		}*/
		else if(pwd=='')
		{
			alert('Please enter Password');
			return false;
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
			return false;
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
			return false;
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
			return false;
		}
		else if(document.getElementById("t5").value.length < 6)
		{
			alert ('Password minimum length is 6');
			return false;
		}
		else if(document.getElementById("t5").value.length > 12)
		{
			alert ('Password max length is 12');
			return false;
		}
		else if(phno=='')
		{
			alert('please enter your mobile no ');
			return false;
		}
	    else if(isNaN(phno))
		{
			alert ('mobile number not supported any alphabetycally letter');
			return false;
		}
		else if(phno.length!=10)
		{
			alert ('mobile no should be  10 digits');
			return false;
		}
		else
		{				                            
               alert('YOUR REGISTRATION SUCCESSFULLY !!');
			   return true;
		}
		
	}
			   
    
    </script>
  <link rel="stylesheet" href="regnewstyle.css">
  </head>

	<body>
	<!-- Main div code -->
	<div id="main">
	<div class="h-tag">
	<h2>Create Your Account</h2>
	</div>
	<!-- create account div -->
	<form action="dbInsert.php" method="POST">
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter your name here" id="t1" class="tb" name="uname" required/></td>
	</tr>
	
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" name="email" required/></td>
	</tr>
	
	<tr>
	<td align="right">Enter Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t4" class="tb" name="pass" required/></td>
	</tr>
	<tr>
	<td align="right">Enter Confirm Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t5" class="tb" required /></td>
	</tr>
	<tr>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMobile Number:</td>
	<td><select >
	
	<option>+91</option>
	<option>+92</option>
	<option>+93</option>
	<option>+94</option>
	<option>+95</option> 
	</select>
	 <input type="phone number"  placeholder="enter ur 10 digis num" id="t6" name="mobno" required></td><br>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" value="Create Account" class="btn" onclick="return registration()" />
	<input type="reset" value="Clear Form" id="res" class="btn" /></td>
	</tr>
	</table>
	</div>
	</form>
	<!-- create account box ending here.. -->
	</div>
	<!-- Main div ending here... -->
	</body>
</html>
