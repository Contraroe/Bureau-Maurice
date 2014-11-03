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
							WHERE active = 1 
							AND zaak_id = '$id'
						");

			$f1=html_entity_decode(mysql_result($result,$i,"plaats"));
			$f2=html_entity_decode(mysql_result($result,$i,"postcode"));
			$f3=html_entity_decode(mysql_result($result,$i,"straat"));
			$f4=html_entity_decode(mysql_result($result,$i,"nr"));
			$f5=html_entity_decode(mysql_result($result,$i,"bus"));
			$f6=html_entity_decode(mysql_result($result,$i,"prijs"));
			$f7=html_entity_decode(mysql_result($result,$i,"info"));
			$f10=html_entity_decode(mysql_result($result,$i,"foto"));
	?>

	<!-- Dbase Content Layout -->
	<h1><?php echo htmlspecialchars($f1); ?></h1>

	<div id="detail">
		<div id="img">
				<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
		</div>
			


	</div>
		



</div>