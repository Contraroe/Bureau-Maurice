<?php 
	include ('../../_php/db_config.php');
	include ('../../_php/db_connect.php');
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$u_zaak_id_2 = htmlentities(addslashes($_GET['z_id_2']));
	$u_regio_2 = htmlentities(addslashes($_GET['regio_2']));
	$u_locatie_2 = htmlentities(addslashes($_GET['locatie_2']));
	$u_prijs_2 = htmlentities(addslashes($_GET['prijs_2']));
	$u_huur_2 = htmlentities(addslashes($_GET['huur_2']));
	$u_reden_2 = htmlentities(addslashes($_GET['reden_2']));
	$u_info_2 = htmlentities(addslashes($_GET['info_2']));
	$u_status_2 = htmlentities(addslashes($_GET['status_2']));
	$u_cat_id_2 = htmlentities(addslashes($_GET['cat_id_2']));
	$u_ico_2 = htmlentities(addslashes($_GET['cat_id_2']));
	$u_icoimg_2 = $u_ico_2 . ".jpg";
	$a_update = "	INSERT INTO zaken (regio, locatie, prijs, huur, reden, info, status, cat_id, ico) 
			VALUES ('$u_regio_2', '$u_locatie_2', '$u_prijs_2', '$u_huur_2', '$u_reden_2', '$u_info_2', '$u_status_2', '$u_cat_id_2', '$u_icoimg_2')
		";
	mysql_query($a_update);
	// echo ("id zaak: '$u_zaak_id_2'<br><br>");
	// echo ("regio: '$u_regio_2'<br><br>");
	// echo ("locatie: '$u_locatie_2'<br><br>");
	// echo ("prijs: '$u_prijs_2'<br><br>");
	// echo ("huur: '$u_huur_2'<br><br>");
	// echo ("reden: '$u_reden_2'<br><br>");
	// echo ("info: '$u_info_2'<br><br>");
	// echo ("status: '$u_status_2'<br><br>");
	// echo ("cat_id: '$u_cat_id_2'<br><br>");
	// echo ("ico: '$u_icoimg_2'<br><br>");
	header ('location: ../index.php');
?>
