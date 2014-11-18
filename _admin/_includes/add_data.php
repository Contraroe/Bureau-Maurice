<div id="add">
	<form name='toevoegen' id='toevoegen' action='_php/toevoegen.php' method='get' accept-charset='UTF-8'>

		<h1>Nieuwe Zaak</h1>
		<input type='hidden' name='z_id_2' id='z_id'  maxlength="50" value=""/>

		<label for='locatie' id="header">Locatie:</label>
		<input type='text' name='locatie_2' id='locatie'  maxlength="50" value=""/><br>
		
		<label for='regio' id="header">Regio:</label>
		<input type='text' name='regio_2' id='regio'  maxlength="50" value=""/><br>

		<label for='prijs' id="header">Prijs:</label>
		<input type='text' name='prijs_2' id='prijs'  maxlength="50" value=""/><br>

		<label for='huur' id="header">Huur:</label>
		<input type='text' name='huur_2' id='huur'  maxlength="50" value=""/><br>

		<label for='reden' id="header">Reden</label>
		<input type='text' name='reden_2' id='reden'  maxlength="50" value=""/><br>

		<label for='info' id="header">Info:</label>
		<textarea type='text' name='info_2' id='info' rows='10' cols='25' maxlength="255" value=""></textarea><br>

		<label for='status' id="header">Status</label>
		<select name='status_2' id='status' />
			<option value="0">Verkocht</option>
			<option value="1">Te koop</option>
		</select>

		<br><br>

		<label for='cat_id' id="header">Type</label>
		<select name='cat_id_2' id='cat_id' />
			<option value="1">Frituur</option>
			<option value="2">Cafe</option>
			<option value="3">Eetcafé</option>
			<option value="4">Snackbar / Broodjes</option>
			<option value="5">Taverne / Restaurant</option>
			<option value="6">Feestzaal</option>
			<option value="8">Tearoom / Ijssalon</option>
			<option value="7">Andere</option>
		</select>
		<br><br>
		<input type='submit' name='submit' id='submit' value='toevoegen'/>
	</form>
</div>


