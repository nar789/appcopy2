<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<?
			include("dblib.php");
			$cnt=count($appname);
			echo "<script>var appcnt=$cnt;</script>";
			for($i=1;$i<=$cnt;$i++){
				echo "<div id=app$i class=app>";
				$idx=$i-1;
				echo "<h1>$appname[$idx]</h1>";
				echo "<form name='upload-form' action=upload.php method=post enctype='multipart/form-data'>";
				echo "<input type=hidden name=MAX_FILE_SIZE value=25242880>";
				echo "<input type=file name=upload id=upload>";
				echo "<input type=hidden name=no value=$i>";
				echo "<input type=submit value='이미지업로드' class=btn>";
				echo "</form>";
				echo "<img class=img id=img$i align=middle onclick='imgclick(this)'>";
				echo "<input type=text id=url$i class=url>";
				echo "<div class=btn onclick='update($i)'>수정</div>";
				echo "</div>";
			}
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
