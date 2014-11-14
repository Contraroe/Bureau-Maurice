<?php include '../../_php/db_config.php' ?>
<?php include '../../_php/db_connect.php' ?>

<?php
	$u_regio = htmlentities(addslashes($_GET['regio']));
	$u_zaak_id = htmlentities(addslashes($_GET['z_id']));
	$u_locatie = htmlentities(addslashes($_GET['locatie']));
	$u_prijs = htmlentities(addslashes($_GET['prijs']));
	$u_huur = htmlentities(addslashes($_GET['huur']));
	$u_reden = htmlentities(addslashes($_GET['reden']));
	$u_status==htmlentities(addslashes((isset($_POST['uitgeleend2']) ? 0 : 1)));
	$u_info = htmlentities(addslashes($_GET['info']));

	$update = "	UPDATE zaken 
			SET	regio='$u_regio', 
				locatie='$u_locatie', 
				prijs='$u_prijs', 
				huur='$u_huur', 
				reden='$u_reden',
				status='$u_status',
				info='$u_info' 

			WHERE zaak_id='$u_zaak_id' 
		";
	mysql_query($update) or die (mysql_error(error));
	?>

<?php
	header ('Location: ../index.php');
	echo $u_status;
?>
