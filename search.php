<html>
<head>
<style>
	table{
		border-collapse:collapse;
		width:60%;
		color:#588c7e;
		font-family:monospace;
		font-size:20px;
		text-align:center;
	}
	th{
		background-color:#d96459;
		color:white;
	}
</style>
</head>
<body>
<?php
	$i=0;
	$source=$_GET['source'];
	$des=$_GET['des'];
	$con=mysqli_connect("localhost","root","","test");
	$sql="SELECT count(id) as tot from route1 where stopage='$source' or stopage='$des'";
	$res=mysqli_query($con,$sql);
	$values=mysqli_fetch_assoc($res);
	$numrow=$values['tot'];	
	if($numrow==2)
	{
		$i=1;
		echo"The Bus Going from Gandhimore to Rathtala.<br>";
		echo"<table border='1' >";
		echo"<tr><th>Bus number</th><th>Fare</th><th>Distance</th></tr>";
		$fare_src="SELECT fare from route1 where stopage='$source'";
		$res_src=mysqli_query($con,$fare_src);
		$val_src=mysqli_fetch_assoc($res_src);
		$src_fare=$val_src["fare"];
		$fare_src="SELECT fare from route1 where stopage='$des'";
		$res_src=mysqli_query($con,$fare_src);
		$val_src=mysqli_fetch_assoc($res_src);
		$des_fare=$val_src["fare"];
		$price=($des_fare-$src_fare);
		$sql1="SELECT BUSID from bus where ROUTE='route1'";
		$res1=mysqli_query($con,$sql1);
		$distance="SELECT distance from route1 where stopage='$source'";
		$res_dis=mysqli_query($con,$distance);
		$val_dis=mysqli_fetch_assoc($res_dis);
		$src_dis=$val_dis["distance"];
		$distance="SELECT distance from route1 where stopage='$des'";
		$res_dis=mysqli_query($con,$distance);
		$val_dis=mysqli_fetch_assoc($res_dis);
		$des_dis=$val_dis["distance"];
		$distance_journey=$des_dis-$src_dis;
		if($price<=2)
		{
			$final_price=5;
			while($row=mysqli_fetch_assoc($res1))
			{
				echo "<tr><td>{$row['BUSID']}</td><td>{$final_price}</td><td>{$distance_journey}</td></tr>";
			}
		}
		else if($price>2&&$price<=4)
		{
			$final_price=9;
			while($row=mysqli_fetch_assoc($res1))
			{
				echo "<tr><td>{$row['BUSID']}</td><td>{$final_price}</td><td>{$distance_journey}</td></tr>";
			}
		}
		echo"</table>";
	}
	$sql="SELECT count(id) as tot from route2 where stopage='$source' or stopage='$des'";
	$res=mysqli_query($con,$sql);
	$values=mysqli_fetch_assoc($res);
	$numrow=$values['tot'];
	if($numrow==2)
	{
		echo"The Bus Going from Gandhimore to Naihati.<br>";
		echo"<table border='1'>";
		echo"<tr><td>Bus number</td><td>Fare</td><td>Distance</td></tr>";
		$fare_src="SELECT fare from route2 where stopage='$source'";
		$res_src=mysqli_query($con,$fare_src);
		$val_src=mysqli_fetch_assoc($res_src);
		$src_fare=$val_src["fare"];
		$fare_src="SELECT fare from route2 where stopage='$des'";
		$res_src=mysqli_query($con,$fare_src);
		$val_src=mysqli_fetch_assoc($res_src);
		$des_fare=$val_src["fare"];
		$price=($des_fare-$src_fare);
		$sql1="SELECT BUSID from bus where ROUTE='route2'";
		$res1=mysqli_query($con,$sql1);
		$distance="SELECT distance from route2 where stopage='$source'";
		$res_dis=mysqli_query($con,$distance);
		$val_dis=mysqli_fetch_assoc($res_dis);
		$src_dis=$val_dis["distance"];
		$distance="SELECT distance from route2 where stopage='$des'";
		$res_dis=mysqli_query($con,$distance);
		$val_dis=mysqli_fetch_assoc($res_dis);
		$des_dis=$val_dis["distance"];
		$distance_journey=$des_dis-$src_dis;
		if($price<=2)
		{
			$final_price=5;
			while($row=mysqli_fetch_assoc($res1))
			{
				echo "<tr><td>{$row['BUSID']}</td><td>{$final_price}</td><td>{$distance_journey}</td></tr>";
			}
		}
		else if($price>2&&$price<=4)
		{
			$final_price=9;
			while($row=mysqli_fetch_assoc($res1))
			{
				echo "<tr><td>{$row['BUSID']}</td><td>{$final_price}</td><td>{$distance_journey}</td></tr>";
			}
		}
		echo"</table>";
	}
?>
</body>
</html>