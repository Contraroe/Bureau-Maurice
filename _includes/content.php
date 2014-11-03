<div id="content">


	<!-- SELECTORS -->
	<div id="data_cont">

	</div>
	<div id="find_cont">
		<div id="postcode">
			<form name="search" id="clear" method="post" action="<?=$PHP_SELF?>">
				<input type="submit" id="clear" name="go" value="Alles" />
				<!-- <label>Toon alle zaken</label> -->
			</form>
 			<form name="search" id="search" method="post" action="<?=$PHP_SELF?>">
		<!-- 		 <select name="pricerange" size="1" id="pricerange">
					<option value="">Alle Prijzen</option>
					<option value="1">&lt; 25.000 &euro; </option>
					<option value="2">25.000 &euro; - 50.000 &euro;</option>
					<option value="3">50.000 &euro; - 75.000 &euro;</option>
					<option value="4">75.000 &euro; - 100.000 &euro;</option>
					<option value="5">100.000 &euro; - 125.000 &euro;</option>
					<option value="6">125.000 &euro; - 150.000 &euro;</option>
					<option value="7">&gt; 150.000 &euro;</option>
				</select>  -->
				<!-- <label>Zoek op plaatsnaam of postcode:</label> -->
				<input type="text" name="find" id="find" value="Postcode of plaats" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Postcode':this.value;"/>
				<input type="submit" id="go" name="go" value="Ga" />
			</form>
			
		</div>
	</div>	
	

	<?php include '_php/search.php' ?>
</div>

