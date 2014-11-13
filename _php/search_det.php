<div id="wrapper">
	
	
	<?php
		$find = $_POST['find'];
		$id = $_REQUEST['id'];
		mysql_query("SET NAMES 'utf8'");

	?>

	
	<!-- Query  -->

	<?php 
		//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							LEFT JOIN category 
							ON zaken.cat_id = category.cat_id
							WHERE zaak_id = '$id'
						");

			$f1=html_entity_decode(mysql_result($result,$i,"info"));
			$f2=html_entity_decode(mysql_result($result,$i,"regio"));
			$f3=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f4=html_entity_decode(mysql_result($result,$i,"huur"));
			$f5=html_entity_decode(mysql_result($result,$i,"reden"));
			$f6=html_entity_decode(mysql_result($result,$i,"cat"));
			$f7=html_entity_decode(mysql_result($result,$i,"ico"));
			$f8=html_entity_decode(mysql_result($result,$i,"zaak_id"));
			$f9=html_entity_decode(mysql_result($result,$i,"status"));
			$f10=html_entity_decode(mysql_result($result,$i,"cat_id"));

			if ( $f9 == 0 ) { $f9 = 'verkocht'; } else { $f9 = '' ; }
	?>		

	<!-- Dbase Content Layout -->
	<h1><?php echo htmlspecialchars_decode($f6);?> <span id="small"> <b>*</b> <?php echo htmlspecialchars_decode($f2);?></span></h1>

	<div id="detail">
		<div id="img">
			<div class="<?php echo htmlspecialchars_decode($f9);?>"><?php echo htmlspecialchars_decode($f9);?></div>
			<img src="_img/zaken/<?php echo htmlspecialchars_decode($f7);?>" alt="<?php echo htmlspecialchars_decode($f7); ?>">
		</div>
		<h6>Omschrijving</h6>
		<?php echo htmlspecialchars_decode($f1); ?>
			
		<h6>Huur</h6>
		<?php echo htmlspecialchars_decode($f4); ?> &euro;

		<h6>Prijs</h6>
		<?php echo htmlspecialchars_decode($f3); ?> &euro;
		<h6>Redenen van verkoop</h6>
		<?php echo htmlspecialchars_decode($f5); ?>

		<h6>Referentie</h6>
		<?php echo htmlspecialchars_decode($f6); ?> <?php echo htmlspecialchars_decode($f10); ?> - <?php echo htmlspecialchars_decode($f8); ?><br><br>
		<a href="contact2.php?zaak=<?php echo htmlspecialchars_decode($f6); ?> <?php echo htmlspecialchars_decode($f8); ?> <?php echo htmlspecialchars_decode($f2); ?>" id="mailref">Interesse, laat het ons weten!</a>
	</div>
	



</div>