<?php
session_start();
if(!isset($_SESSION['logger']))
{
	echo "<script>window.location.href='login.php?info=unauthorised access'</script>";

	
}
	
?>
<html>
<body>
<?php
$user=$_SESSION['logger'];
echo "Welcome $user";

?>
</body>
</html>