<?php
	session_start();	
?>
<html>
<?php
	$pass=$_POST['pass'];
	$user=$_SESSION['logger'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("official_site");
	$result=mysql_query("update users set Password='$pass' where Email='$user'");
	if(mysql_affected_rows($con)==1)
	{
		echo "<script>window.location.href='home.php';alert('successfully updated')</script>";	
	}
	else
	{
		echo "<script>window.location.href='passchange.php';alert('no result found')</script>";
	}

?>
</html>