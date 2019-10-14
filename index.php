<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title> ¯\_(ツ)_/¯ </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="dist/css/main.css">

	</head>
	<body>

		<?php require 'database.php'
			// require adds the contents of the indicated file to the page ** and will not load the entire project if error is found
			// require_once is used to make sure the file/content is only added once  

		;?>

		<div class="floating-box">
			<img class="logo" src="dist/img/logo.png" alt="Circus Logo">
			<div class="foreground">
				<h1>Reviewr 2.0!</h1>
				<p>We provide intergated reviews with cloud-based syndication for a more complexless and automated robotic takeover.</p>
				<h1>Ready to complain?</h1>
				
			</div>
			<div class="background"></div>
		</div>

		<?php include 'reviews.php';?>
		<?php include 'single-review.php';?>

		<script src="dist/js/main.js"></script>

	</body>
</html>
