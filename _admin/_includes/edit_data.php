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

		<label for='locatie' id="header">Locatie:</label>
		<input type='text' name='locatie' id='locatie'  maxlength="50" value="<?php echo $row['locatie'] ?>"/><br>
		
		<label for='regio' id="header">Regio:</label>
		<input type='text' name='regio' id='regio'  maxlength="50" value="<?php echo $row['regio'] ?>"/><br>

		<label for='prijs' id="header">Prijs:</label>
		<input type='text' name='prijs' id='prijs'  maxlength="50" value="<?php echo $row['prijs'] ?>"/><br>

		<label for='huur' id="header">Huur:</label>
		<input type='text' name='huur' id='huur'  maxlength="50" value="<?php echo $row['huur'] ?>"/><br>

		<label for='reden' id="header">Reden</label>
		<input type='text' name='reden' id='reden'  maxlength="50" value="<?php echo $row['reden'] ?>"/><br>

		<label for='info' id="header">Info:</label>
		<textarea type='text' name='info' id='info' rows='10' cols='25' maxlength="255" value=""><?php echo $row['info'] ?></textarea><br>

		<label for='status' id="header">Status</label>
		<select name='status' id='status' />
			<option value="0" <?php if ($row['status'] == 0) {echo ('selected');} ?>>Verkocht</option>
			<option value="1" <?php if ($row['status'] == 1) {echo ('selected');} ?>>Te koop</option>
		</select>

		<br><br>

		<label for='cat_id' id="header">Type</label>
		<select name='cat_id' id='cat_id' />
			<option value="1" <?php if ($row['cat_id'] == 1) {echo ('selected');} ?>>Frituur</option>
			<option value="2" <?php if ($row['cat_id'] == 2) {echo ('selected');} ?>>Cafe</option>
			<option value="3" <?php if ($row['cat_id'] == 3) {echo ('selected');} ?>>Eetcafé</option>
			<option value="4" <?php if ($row['cat_id'] == 4) {echo ('selected');} ?>>Snackbar / Broodjes</option>
			<option value="5" <?php if ($row['cat_id'] == 5) {echo ('selected');} ?>>Taverne / Restaurant</option>
			<option value="6" <?php if ($row['cat_id'] == 6) {echo ('selected');} ?>>Feestzaal</option>
			<option value="8" <?php if ($row['cat_id'] == 8) {echo ('selected');} ?>>Tearoom / Ijssalon</option>
			<option value="7" <?php if ($row['cat_id'] == 7) {echo ('selected');} ?>>Andere</option>
		</select>

		<br><br>

		
		<input type='submit' name='submit' id='submit' value='Update'/>
	</form>
</div>


