<?php
session_start();
?>
<html>
<body>
<?php
session_destroy();
echo "<script>window.location.href='index.php';alert('logged out successfully')</script>";
?>
</body>
</html>