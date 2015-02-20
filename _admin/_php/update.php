<?php 
	include ('../../_php/db_config.php');
	include ('../../_php/db_connect.php');

	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);

	mysqli_query($connect, "SET NAMES 'utf8'");
	$u_zaak_id = $_REQUEST['z_id'];
	$u_regio = $_REQUEST['regio'];
	$u_locatie = $_REQUEST['locatie'];
	$u_prijs = $_REQUEST['prijs'];
	$u_huur = $_REQUEST['huur'];
	$u_reden = $_REQUEST['reden'];
	$u_info = $_REQUEST['info'];
	$u_status = $_REQUEST['status'];
	$u_ref = $_REQUEST['ref'];
	$u_cat_id = $_REQUEST['cat_id'];
	$u_ico = $_REQUEST['cat_id'];
	$u_icoimg = $u_ico . ".jpg";

	$update = mysqli_query($connect, "UPDATE zaken
			SET	regio='$u_regio',
				locatie='$u_locatie',
				prijs='$u_prijs',
				huur='$u_huur',
				reden='$u_reden',
				info='$u_info',
				status='$u_status',
				cat_id='$u_cat_id',
				ico='$u_icoimg',
				ref='$u_ref'
			WHERE zaak_id='$u_zaak_id'
		");

	// echo ("id zaak: '$u_zaak_id'<br><br>");
	// echo ("regio: '$u_regio'<br><br>");
	// echo ("locatie: '$u_locatie'<br><br>");
	// echo ("prijs: '$u_prijs'<br><br>");
	// echo ("huur: '$u_huur'<br><br>");
	// echo ("reden: '$u_reden'<br><br>");
	// echo ("info: '$u_info'<br><br>");
	// echo ("status: '$u_status'<br><br>");
	// echo ("cat_id: '$u_cat_id'<br><br>");
	// echo ("ico: '$u_icoimg'<br><br>");
	// echo ("ref: '$u_ref'<br><br>");

	mysqli_query($connect, $update);
	mysqli_close($connect);
	header ('location: ../index.php');
?>
