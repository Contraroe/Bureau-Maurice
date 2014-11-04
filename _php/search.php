<div id="wrapper">
	<h1>Overnames</h1>
	
	<?php
		$find = $_POST['find'];
	?>


	<!-- Query  -->

	<?php 
		if (!empty($find)) {

		//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							-- WHERE active = 1 
							WHERE postcode LIKE '%$find%'
							OR plaats LIKE '%$find%'
							ORDER BY prijs ASC
						");
			$numa=mysql_numrows($result);
			mysql_close();
			if (!empty($numa)) {
	?>

	<!-- Dbase Content -->
	<?php
		$i=0;
		while ($i < $numa) {
			$f1=html_entity_decode(mysql_result($result,$i,"plaats"));
			$f2=html_entity_decode(mysql_result($result,$i,"postcode"));
			$f3=html_entity_decode(mysql_result($result,$i,"straat"));
			$f4=html_entity_decode(mysql_result($result,$i,"nr"));
			$f5=html_entity_decode(mysql_result($result,$i,"bus"));
			$f6=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f7=html_entity_decode(mysql_result($result,$i,"naam"));
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
			$f11=html_entity_decode(mysql_result($result,$i,"zaak_id"));
			$f12=html_entity_decode(mysql_result($result,$i,"active"));

			if ($f12 == 0 ){ $f12 = 'verkocht'; } else { $f12 = '' ; }

	?>

	<!-- Dbase Content Layout -->

	<?php include '_includes/frit_small.php' ?>


	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten voor <br> <b>$find</b></div>";}
	} else { 
			//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							-- WHERE active = 1 
							ORDER BY prijs ASC
						");
			$numa=mysql_numrows($result);
			mysql_close();
			if (!empty($numa)) {
	?>

	<!-- Dbase Content -->
	<?php
		$i=0;
		while ($i < $numa) {
			$f1=html_entity_decode(mysql_result($result,$i,"plaats"));
			$f2=html_entity_decode(mysql_result($result,$i,"postcode"));
			$f3=html_entity_decode(mysql_result($result,$i,"straat"));
			$f4=html_entity_decode(mysql_result($result,$i,"nr"));
			$f5=html_entity_decode(mysql_result($result,$i,"bus"));
			$f6=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f7=html_entity_decode(mysql_result($result,$i,"naam"));
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
			$f11=html_entity_decode(mysql_result($result,$i,"zaak_id"));
			$f12=html_entity_decode(mysql_result($result,$i,"active"));

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