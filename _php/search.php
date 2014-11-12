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
			$f1=html_entity_decode(mysql_result($result,$i,"info"));
			$f2=html_entity_decode(mysql_result($result,$i,"regio"));
			$f3=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f4=html_entity_decode(mysql_result($result,$i,"huur"));
			$f5=html_entity_decode(mysql_result($result,$i,"redenen"));
			$f6=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f7=html_entity_decode(mysql_result($result,$i,"cat_id"));

			if ( $f7 == 1 ) { $f7 = 'Fituur'; } elseif 
			( $f7 == 2 ) { $f7 = 'Café'; } elseif 
			( $f7 == 3 ) { $f7 = 'Eetcafé'; } elseif 
			( $f7 == 4 ) { $f7 = 'Snackbar / Broodjes'; } elseif
			( $f7 == 5 ) { $f7 = 'Taverne / Restaurant'; } elseif 
			( $f7 == 6 ) { $f7 = 'Feestzaal'; } elseif 
			( $f7 == 7 ) { $f7 = 'Andere'; } elseif
			( $f7 == 8 ) { $f7 = 'Tearoom / Ijssalon'; }  

			$f10=html_entity_decode(mysql_result($result,$i,"ico"));
			$f11=html_entity_decode(mysql_result($result,$i,"zaak_id"));
			$f12=html_entity_decode(mysql_result($result,$i,"status"));

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