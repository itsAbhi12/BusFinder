<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mobno=$_POST['mobno'];
//mysql_connect("localhost","root","");//connect to server
$con=mysql_connect("localhost","root","");
mysql_select_db("official_site");
//$r="SELECT Email,Mobile_Number from users where Email='$email' or Mobile_Number='$mobno'";
$res=mysql_query("SELECT Email,Mobile_Number from users where Email='$email' or Mobile_Number='$mobno'");

if($row=mysql_fetch_row($res))
{
	echo "<script>alert('User already present.Please use different email and mobile number');window.location.href=('registration.php')</script>";
}
else
{
	$result=mysql_query("insert into users values('$uname','$email','$pass','$mobno')");
	echo "<script>window.location.href=('index.php')</script>";
}
?>