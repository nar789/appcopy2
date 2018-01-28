<?
	include("dblib.php");

	$url=$_GET['url'];
	$no=$_GET['no'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_user) or die("fail");

	$query="update $db_name set imgurl='$url' where no=$no";
	
	$ret=mysqli_query($conn,$query);

	if($ret){
		echo "<script>location.href=\"index.php\"</script>";
	}else
		echo "upload error";
	mysqli_close($conn);
?>
