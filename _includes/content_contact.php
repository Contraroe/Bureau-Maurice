<div id="content">


	<!-- SELECTORS -->
	<div id="data_cont">

	</div>
	<div id="find_cont">
		<div id="postcode">
			<form name="search" id="clear" method="post" action="index.php">
				<input type="submit" id="clear" name="go" value="Alles" />
				<!-- <label>Toon alle zaken</label> -->
			</form>
			<form name="search" id="search" method="post" action="index.php">
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
	

	<div id="wrapper">
		<h1><b>Contact<span id="small"> <b>*</b> verplichte velden</span></b></h1>
		<div id="formcon">
		 	<form id="form" method="post" action="_php/mailform.php">
		 		<textarea name="message" id="message" rows="10" cols="60" required="Message" placeholder="Bericht"></textarea>
				<input type="text" name="naam" id="naam" required="Name" placeholder="Naam"/> <b>*</b><br />
				<input type="text" name="adres" id="adres" placeholder="Adress" required="Adress"/> <b>*</b><br />
				<input type="email" placeholder="Email adres" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/> <b>*</b><br />
				<input type="submit" name="send" value="verzenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
				<input type="reset" name="clear" value="wis formulier" class="clear-button"  onmouseover="this.className='btn btnclear'" onmouseout="this.className='clear-button'" >
				<input id="check" type="text" name="url" value="" placeholder="leave empty">
			</form>
		</div>
	</div>
</div>

