<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<body>
	<?
		include("../dblib.php");
		$no=$_GET['no'];
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("fail");
		$query="select * from $tablename where no=$no";
		$ret=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($ret);
		echo "<img src=".$row[1]." class=img>";
		echo "<script>StartTimer(\"".$row[2]."\");</script>";
		mysqli_close($conn);
	?>
	</body>
</html>
