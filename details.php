<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BUREAUMAURICE</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="_css/normalize.min.css">
		<link rel="stylesheet" href="_css/global.css">
		<script src="_js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<?php include '_php/db_config.php' ?>
		<?php include '_php/db_connect.php' ?>

		<?php include '_includes/header.php' ?>
		<?php include '_includes/content_det.php' ?>
		<?php include '_includes/footer.php' ?>


		<div id="container" class="map"><?php include '_includes/map.php' ?></div>



		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="_js/plugins.js"></script>
		<script src="_js/main.js"></script>

		

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script src="_js/vendor/google.analytics.js"></script>
	</body>
</html>
