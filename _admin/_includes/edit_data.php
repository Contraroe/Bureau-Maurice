<div id="edit">
	<?php
		$ref = $_REQUEST['ref'];
	?>

	
	<!-- Query  -->

	<?php 
		//Now we search for our search term, in the field the user specified
			$data = mysql_query("		SELECT * 
							FROM zaken 
							LEFT JOIN category 
							ON zaken.cat_id = category.cat_id
							WHERE zaak_id = '$ref'
						") or die(msyql_error()) ;

			$row = mysql_fetch_assoc($data);
			



	?>		
	<!-- Dbase Content Layout -->

	<form name='update' id='update' action='_php/update.php' method='get' accept-charset='UTF-8'>

		<h1>Wijzig zaak</h1>
		<input type='hidden' name='z_id' id='z_id'  maxlength="50" value="<?php echo $row['zaak_id'] ?>"/>

		<label for='locatie' id="header">Locatie:</label><br>
		<input type='text' name='locatie' id='locatie'  maxlength="50" value="<?php echo $row['locatie'] ?>"/><br><br>
		
		<label for='regio' id="header">Regio:</label><br>
		<input type='text' name='regio' id='regio'  maxlength="50" value="<?php echo $row['regio'] ?>"/><br><br>

		<label for='prijs' id="header">Prijs:</label><br>
		<input type='text' name='prijs' id='prijs'  maxlength="50" value="<?php echo $row['prijs'] ?>"/><br><br>

		<label for='huur' id="header">Huur:</label><br>
		<input type='text' name='huur' id='huur'  maxlength="50" value="<?php echo $row['huur'] ?>"/><br><br>

		<label for='reden' id="header">Reden</label><br>
		<input type='text' name='reden' id='reden'  maxlength="50" value="<?php echo $row['reden'] ?>"/><br><br>

		<label for='status' id="header">Status:</label><br>
		<input type='checkbox' name='status' value='0' <?php if ($row['status'] == 0) echo 'checked'; ?>/>

		<label for='info' id="header">Info:</label><br>
		<textarea type='text' name='info' id='info' rows='10' cols='25' maxlength="255" value=""><?php echo $row['info'] ?></textarea><br><br>

		
		<input type='submit' name='submit' id='submit' value='Update'/>
	</form>
</div>


