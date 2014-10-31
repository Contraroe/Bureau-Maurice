<div id="wrapper">
	<h1>Handelszaken</h1>
	
	<?php
		$find = $_POST['find'];
	?>


	<!-- Query  -->

	<?php 
		if (!empty($find)) {

		//Now we search for our search term, in the field the user specified
			$result = mysql_query("SELECT * FROM zaken WHERE active = 1 AND postcode LIKE '%$find%' OR plaats LIKE '%$find%' ");
		
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
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
	?>

	<!-- Dbase Content Layout -->
	<div id="frituren">
		<div id="img">
			<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
		</div>
		<div id="info">
			<h2><?php echo htmlspecialchars($f1); ?></h2>
			<h6>Adres</h6> 
			<?php echo htmlspecialchars($f3); ?> <?php echo htmlspecialchars($f4); ?> <?php echo htmlspecialchars($f5); ?><br>
			<?php echo htmlspecialchars($f2); ?> <?php echo htmlspecialchars($f1); ?><br>
			<h6>Prijs</h6> 
			<?php echo htmlspecialchars($f6); ?> &euro;

			<div id="extra">+</div>
		</div>
	</div>

	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten</div>";}
	} else { 
			//Now we search for our search term, in the field the user specified
			$result = mysql_query("SELECT * FROM zaken WHERE active = 1 ");
		
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
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
	?>

	<!-- Dbase Content Layout -->
	<div id="frituren">
		
		<div id="info">
			<h2><?php echo htmlspecialchars($f1); ?></h2>
			<div id="img">
			<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
		</div>
			<h6>Adress</h6> 
			<?php echo htmlspecialchars($f3); ?> <?php echo htmlspecialchars($f4); ?> <?php echo htmlspecialchars($f5); ?><br>
			<?php echo htmlspecialchars($f2); ?> <?php echo htmlspecialchars($f1); ?><br>
			<h6>Prijs</h6> 
			<?php echo htmlspecialchars($f6); ?> &euro;

			<div id="extra">+</div>
		</div>
	</div>

	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten</div>";}
	}

	?>



	</div>