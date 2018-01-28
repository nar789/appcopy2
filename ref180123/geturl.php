<?
	include("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_user);
	$query="select imgurl,url from $db_name";

	$ret=mysqli_query($conn,$query);
	echo "{";
	$cnt=0;
	while($row=mysqli_fetch_array($ret)){
		$cnt++;
		echo "\"imgurl$cnt\":\"$row[0]\",\"url$cnt\":\"$row[1]\"";
		if($cnt!=count($appname))
			echo ",";
	}
	echo "}";
	mysqli_close($conn);
?>
