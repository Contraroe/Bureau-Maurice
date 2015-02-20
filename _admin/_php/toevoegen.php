<?php 
	include ('../../_php/db_config.php');
	include ('../../_php/db_connect.php');

	mysqli_query($connect,"SET NAMES 'utf8'");
	// ini_set('display_errors',1);
	// ini_set('display_startup_errors',1);
	// error_reporting(E_ALL);

	$u_zaak_id_2 = $_REQUEST['z_id_2'];
	$u_regio_2 = $_REQUEST['regio_2'];
	$u_locatie_2 = $_REQUEST['locatie_2'];
	$u_prijs_2 = $_REQUEST['prijs_2'];
	$u_huur_2 = $_REQUEST['huur_2'];
	$u_reden_2 = $_REQUEST['reden_2'];
	$u_info_2 = $_REQUEST['info_2'];
	$u_status_2 = $_REQUEST['status_2'];
	$u_ref_2 = $_REQUEST['ref_2'];
	$u_cat_id_2 = $_REQUEST['cat_id_2'];
	$u_ico = $_REQUEST['cat_id_2'];
	$u_icoimg_2 = $u_ico . ".jpg";
	$a_update = mysqli_query($connect, "	INSERT INTO zaken (regio, locatie, prijs, huur, reden, info, status, cat_id, ico, ref) 
			VALUES ('$u_regio_2', '$u_locatie_2', '$u_prijs_2', '$u_huur_2', '$u_reden_2', '$u_info_2', '$u_status_2', '$u_cat_id_2', '$u_icoimg_2', '$u_ref_2')
		");
	mysqli_query($connect, $a_update);
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
