<div id="edit">
	<?php 
		$ref= $_REQUEST['ref'];

		mysqli_query($connect,"SET NAMES 'utf8'");
		// Query

		$data = mysqli_query($connect, "SELECT * 
						FROM zaken 
						LEFT JOIN category 
						ON zaken.cat_id = category.cat_id
						WHERE zaak_id = '$ref' 
					");
		if (!$data) { die('Invalid query: Line 19' . mysql_error());};

		mysqli_data_seek($data,$ref);
		$row=mysqli_fetch_row($data);



		$f8=html_entity_decode($row[0]); //zaak_id
		$f10=html_entity_decode($row[1]); //cat
		$f11=html_entity_decode($row[2]); //Locatie
		$f2=html_entity_decode($row[3]); //regio
		$f4=html_entity_decode($row[4]); //huur
		$f3=html_entity_decode($row[5]); //prijs
		$f5=html_entity_decode($row[6]); //reden
		$f1=html_entity_decode($row[7]); //info
		$f7=html_entity_decode($row[8]); //ico
		$f9=html_entity_decode($row[9]); //status
		$f10=html_entity_decode($row[14]); //Cat_ID
		$f11=html_entity_decode($row[13]); //ref

	?>		
	<!-- Dbase Content Layout -->

	<form name='update' id='update' action='_php/update.php' method='get' accept-charset='UTF-8'>

		<h1>Wijzig zaak</h1>
		<input type='hidden' name='z_id' id='z_id'  maxlength="50" value="<?php echo html_entity_decode($f8); ?>"/>

		<label for='locatie' id="header">Locatie:</label>
		<input type='text' name='locatie' id='locatie'  maxlength="50" value="<?php echo html_entity_decode($f11); ?>"/><br>
		
		<label for='regio' id="header">Regio:</label>
		<input type='text' name='regio' id='regio'  maxlength="50" value="<?php echo html_entity_decode($f2); ?>"/><br>

		<label for='prijs' id="header">Prijs:</label>
		<input type='text' name='prijs' id='prijs'  maxlength="50" value="<?php echo html_entity_decode($f3); ?>"/><br>

		<label for='huur' id="header">Huur:</label>
		<input type='text' name='huur' id='huur'  maxlength="50" value="<?php echo html_entity_decode($f4); ?>"/><br>

		<label for='reden' id="header">Reden</label>
		<input type='text' name='reden' id='reden'  maxlength="50" value="<?php echo html_entity_decode($f5); ?>"/><br>

		<label for='info' id="header">Info:</label>
		<textarea type='text' name='info' id='info' rows='10' cols='25' maxlength="255" value=""><?php echo html_entity_decode($f1); ?></textarea><br>

		<label for='ref' id="header">Referentie</label>
		<input type='text' name='ref' id='ref'  maxlength="50" value="<?php echo html_entity_decode($f11); ?>"/><br>

		<label for='status' id="header">Status</label>
		<select name='status' id='status' />
			<option value="0" <?php if ($f9 == 0) {echo ('selected');} ?>>Verkocht</option>
			<option value="1" <?php if ($f9 == 1) {echo ('selected');} ?>>Te koop</option>
		</select>

		<br><br>

		<label for='cat_id' id="header">Type</label>
		<select name='cat_id' id='cat_id' />
			<option value="1" <?php if ($f10 == 1) {echo ('selected');} ?>>Frituur</option>
			<option value="2" <?php if ($f10 == 2) {echo ('selected');} ?>>Cafe</option>
			<option value="3" <?php if ($f10 == 3) {echo ('selected');} ?>>Eetcafé</option>
			<option value="4" <?php if ($f10 == 4) {echo ('selected');} ?>>Snackbar / Broodjes</option>
			<option value="5" <?php if ($f10 == 5) {echo ('selected');} ?>>Taverne / Restaurant</option>
			<option value="6" <?php if ($f10 == 6) {echo ('selected');} ?>>Feestzaal</option>
			<option value="8" <?php if ($f10 == 8) {echo ('selected');} ?>>Tearoom / Ijssalon</option>
			<option value="7" <?php if ($f10 == 7) {echo ('selected');} ?>>Andere</option>
		</select>

		<br><br>
		
		<input type='submit' name='submit' id='submit' value='Update'/>
	</form>
</div>