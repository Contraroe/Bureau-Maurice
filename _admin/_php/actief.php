<?php 
include ('../../_php/error.php');
include ('../../_php/db_config.php');
include ('../../_php/db_connect.php');

	$ref= $_REQUEST['ref'];
	$active= $_REQUEST['active'];
	$find= $_REQUEST['find'];

	if ($active ==='1') {
		$active = '0';
	} else {
		$active = '1';
	};

	// print $ref."<br>";
	// print $active;
	// mysqli_query($connect, "SET NAMES 'utf8'");

	$update = mysqli_query($connect, "UPDATE zaken
			SET	active = '$active'
			WHERE	zaak_id = '$ref'
		");

	// if (!$result) { die('Invalid query: Line 19' . mysql_error());};


	mysqli_query($connect, $update);
	mysqli_close($connect);
	header ('location: ../index.php');
?>