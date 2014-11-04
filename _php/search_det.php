<div id="wrapper">
	
	
	<?php
		$find = $_POST['find'];
		$id = $_REQUEST['id'];

	?>

	
	<!-- Query  -->

	<?php 
		//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							-- WHERE active = 1 
							WHERE zaak_id = '$id'
						");

			$f1=html_entity_decode(mysql_result($result,$i,"plaats"));
			$f2=html_entity_decode(mysql_result($result,$i,"postcode"));
			$f3=html_entity_decode(mysql_result($result,$i,"straat"));
			$f4=html_entity_decode(mysql_result($result,$i,"nr"));
			$f5=html_entity_decode(mysql_result($result,$i,"bus"));
			$f6=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f7=html_entity_decode(mysql_result($result,$i,"info"));
			$f8=html_entity_decode(mysql_result($result,$i,"naam"));
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
			$f12=html_entity_decode(mysql_result($result,$i,"active"));

			if ($f12 == 0 ){ $f12 = 'verkocht'; } else { $f12 = '' ; }
	?>		

	<!-- Dbase Content Layout -->
	<h1><?php echo htmlspecialchars($f8);?></h1>

	<div id="detail">
		<div id="img">
			<div class="<?php echo htmlspecialchars($f12);?>"><?php echo htmlspecialchars($f12);?></div>
			<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
		</div>
		<h6>Omschrijving</h6>
		<?php echo htmlspecialchars($f7); ?>
		<h6>Adres</h6>
		<?php echo htmlspecialchars($f3); ?> <?php echo htmlspecialchars($f4); ?><?php echo htmlspecialchars($f5); ?><br>
		<?php echo htmlspecialchars($f2); ?><?php echo htmlspecialchars($f1); ?>

		<h6>Prijs</h6>
		<?php echo htmlspecialchars($f6); ?> &euro;
	</div>
		



</div>