<!DOCTYPE html>

<html>
	<head>
		<title>ILN HomePage</title>
		<link rel="stylesheet" href="Css/header.css">
		<link rel="stylesheet" href="Css/content.css">
		<link rel="stylesheet" href="Css/right_column.css">
		<link rel="stylesheet" href="Css/footer.css">
	</head>
	<body>
		<div id="wrapper">
			<?php include "static_elements/header.php"; ?>
				
			<?php 
				include "content/c_homepage.php";		
				include "right_column/rc_homepage.php";	
			?>
			
			<?php include "static_elements/footer.php";	?>
		</div>
	</body>
</html>