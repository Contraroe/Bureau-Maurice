<?php 
	include ('../../_php/db_config.php');
	include ('../../_php/db_connect.php');
	mysql_query("SET NAMES 'utf8'");
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$u_zaak_id = html_entity_decode(addslashes($_GET['z_id']));
	$u_regio = html_entity_decode(addslashes($_GET['regio']));
	$u_locatie = html_entity_decode(addslashes($_GET['locatie']));
	$u_prijs = html_entity_decode(addslashes($_GET['prijs']));
	$u_huur = html_entity_decode(addslashes($_GET['huur']));
	$u_reden = html_entity_decode(addslashes($_GET['reden']));
	$u_info = html_entity_decode(addslashes($_GET['info']));
	$u_status = html_entity_decode(addslashes($_GET['status']));
	$u_cat_id = html_entity_decode(addslashes($_GET['cat_id']));
	$u_ico = html_entity_decode(addslashes($_GET['cat_id']));
	$u_icoimg = $u_ico . ".jpg";
	$update = "	UPDATE zaken
			SET	regio='$u_regio',
				locatie='$u_locatie',
				prijs='$u_prijs',
				huur='$u_huur',
				reden='$u_reden',
				info='$u_info',
				status='$u_status',
				cat_id='$u_cat_id',
				ico='$u_icoimg'
			WHERE zaak_id='$u_zaak_id'
		";
	mysql_query($update);
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
	header ('location: ../index.php');
?>
