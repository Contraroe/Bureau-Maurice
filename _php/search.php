<div id="wrapper">
	<h1>Overnames</h1>

	<?php
	    if (isset($_POST['find']))
	    {
	    $find = $_POST['find'];
		}
	    else
	    {
	    $_POST['find']="undefine";
	    }
		mysqli_query($connect,"SET NAMES 'utf8'");
	?>


	<!-- Query  -->

	<?php
		if (!empty($find)) {

		//Now we search for our search term, in the field the user specified
			$result = mysqli_query($connect,"	SELECT *
							FROM zaken
							LEFT JOIN category
							ON zaken.cat_id = category.cat_id
							WHERE active = '1'
							AND ( locatie OR regio OR cat LIKE '%$find%' )

							");
			$numa=mysqli_num_rows($result);
			mysqli_close($connect);
			if (!empty($numa)) {


	// Dbase Content

		$i=0;
		while ($i < $numa) {
			mysqli_data_seek($result,$i);
			$row=mysqli_fetch_row($result);
			$f1=html_entity_decode($row[7]);
			$f2=html_entity_decode($row[3]);
			$f3=html_entity_decode($row[5]);
			$f4=html_entity_decode($row[4]);
			$f5=html_entity_decode($row[6]);
			$f6=html_entity_decode($row[5]);
			$f7=html_entity_decode($row[14]);
			$f10=html_entity_decode($row[8]);
			$f11=html_entity_decode($row[0]);
			$f12=html_entity_decode($row[9]);

			if ( $f12 == 0 ) { $f12 = 'verkocht'; } else { $f12 = '' ; }

	?>

	<!-- Dbase Content Layout -->

	<?php include '_includes/frit_small.php' ?>


	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten voor <br> <b>$find</b></div>";}
	} else {
			//Now we search for our search term, in the field the user specified
			$result = mysqli_query($connect,"	SELECT *
							FROM zaken
							LEFT JOIN category
							ON zaken.cat_id = category.cat_id
							WHERE active = '1'
							ORDER BY prijs ASC

						");
			$numa=mysqli_num_rows($result);
			mysqli_close($connect);
			if (!empty($numa)) {
	?>

	<!-- Dbase Content -->
	<?php
		$i=0;
		while ($i < $numa) {

			mysqli_data_seek($result,$i);
			$row=mysqli_fetch_row($result);
			$f1=html_entity_decode($row[7]);
			$f2=html_entity_decode($row[3]);
			$f3=html_entity_decode($row[5]);
			$f4=html_entity_decode($row[4]);
			$f5=html_entity_decode($row[6]);
			$f6=html_entity_decode($row[5]);
			$f7=html_entity_decode($row[14]);
			$f10=html_entity_decode($row[8]);
			$f11=html_entity_decode($row[0]);
			$f12=html_entity_decode($row[9]);

		if ( $f12 == 0 ) { $f12 = 'verkocht'; } else { $f12 = '' ; }
	?>

	<!-- Dbase Content Layout -->
	<?php include '_includes/frit_small.php' ?>

	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten voor <br><b>$find</b></div>";}
	}

	?>



</div>