<div id="wrapper">
	<h1>Handelszaken</h1>
	
	<?php
		$find = $_POST['find'];
		// if($find == 0) $find = '%';

		// $price=$_POST['pricerange'];
		// if($price == 0) $price = '0 AND 1000000' ;

		// switch ($price) {
		// 	case 1  :  $price = "0 AND 25000"; break;
		// 	case 2  :  $price = "25000 AND 50000"; break;
		// 	case 3  :  $price = "50000 AND 75000"; break;
		// 	case 4  :  $price = "75000 AND 100000"; break;
		// 	case 5  :  $price = "100000 AND 125000"; break;   
		// 	case 6  :  $price = "125000 AND 150000"; break;       
		// 	case 7  :  $price = "150000 AND 1000000"; break;
		// }

	?>


	<!-- Query  -->

	<?php 
		if (!empty($find)) {

		//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							WHERE active = 1 
							AND postcode LIKE '%$find%'
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
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
			$f11=html_entity_decode(mysql_result($result,$i,"zaak_id"));

	?>

	<!-- Dbase Content Layout -->

	<div id="frituren">
		<div id="info">
			<h2><?php echo htmlspecialchars($f1); ?></h2><a href="details.php?id=<?php echo htmlspecialchars($f11);?>"><div id="extra">+</div></a>
			<div id="img">
				<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
			</div>
			<h6>Frituur</h6> 
			<?php echo htmlspecialchars($f3); ?> <?php echo htmlspecialchars($f4); ?> <?php echo htmlspecialchars($f5); ?><br>
			<?php echo htmlspecialchars($f2); ?> <?php echo htmlspecialchars($f1); ?><br><br>
			<b>Prijs</b> : 
			<?php echo htmlspecialchars($f6); ?> &euro; 
		</div>
	</div>

	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten voor <br> <b>$find</b></div>";}
	} else { 
			//Now we search for our search term, in the field the user specified
			$result = mysql_query("	SELECT * 
							FROM zaken 
							WHERE active = 1 
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
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
			$f11=html_entity_decode(mysql_result($result,$i,"zaak_id"));
	?>

	<!-- Dbase Content Layout -->
	<div id="frituren">
		<div id="info">
			<h2><?php echo htmlspecialchars($f1); ?></h2><a href="details.php?id=<?php echo htmlspecialchars($f11);?>"><div id="extra">+</div></a>
			<div id="img">
				<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
			</div>
			<h6>Frituur</h6> 
			<?php echo htmlspecialchars($f3); ?> <?php echo htmlspecialchars($f4); ?> <?php echo htmlspecialchars($f5); ?><br>
			<?php echo htmlspecialchars($f2); ?> <?php echo htmlspecialchars($f1); ?><br><br>
			<b>Prijs</b> : 
			<?php echo htmlspecialchars($f6); ?> &euro;
		</div>
	</div>

	<?php
	$i++;
			}
		} else { echo "<div id='frituren' class='no'>Geen resultaten voor <br><b>$find</b></div>";}
	}

	?>



</div>