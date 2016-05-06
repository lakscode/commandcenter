<html>
	<head>
		<title>Command Center</title>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<?php

include("config/db.php");
if($data_type == "db")
		echo '<link rel="stylesheet" type="text/css" media="screen" href="css/style.php">';

if($data_type == "json")
echo '<link rel="stylesheet" type="text/css" media="screen" href="css/style_json.php">';

   
?>


	</head>
	
	<body onload="showdetail()">
		<div class="col9">
			<?php include("slider.php"); ?>
		</div>
	</body>
	
</html>