<?php
session_start();
?>
<html>
<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("official_site");
$result=mysql_query("select * from users where Email='$email' and Password='$pass'");
if(mysql_num_rows($result)>=1)
{
	$_SESSION['logger']=$email;
	echo "<script>window.location.href='home.php' ;alert('Successfully logged in!!')</script>";
	
}
else
{
	echo "<script>window.location.href='index.php';alert('Your email or password is wrong!!')</script>";
	
}
?>
</html>