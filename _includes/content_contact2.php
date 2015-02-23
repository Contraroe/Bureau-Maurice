<div id="content">


	<!-- SELECTORS -->
	<div id="data_cont">
		<?php include '_includes/facts.php' ?>

		<?php $zaak= $_REQUEST['zaak']; ?>
		<?php $bmref= $_REQUEST['bmref']; ?>

		
	</div>
	<div id="find_cont">
		<div id="postcode">
			<form name="search" id="clear" method="post" action="index.php#data_cont">
				<input type="submit" id="clear" name="go" value="Alle" />
			</form>
			<form name="search" id="search" method="post" action="index.php#data_cont">
				<input type="text" name="find" id="find" value="Plaats of Type" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Postcode':this.value;"/>
				<input type="submit" id="go" name="go" value="Ga" />
			</form>
			
		</div>
	</div>	
	

	<div id="wrapper">
		<h1><b>Contact<span id="small"> <b>*</b> verplichte velden</span></b></h1>
		<div id="formcon">
		 	<form id="form" method="post" action="_php/mailform.php">
		 		<label>Refentie :</label>
		 		<input type="text" name="ref" id="ref" Value="<?php echo htmlspecialchars_decode($zaak);?>" readonly/><br>
		 		<textarea name="message" id="message" rows="15" cols="60" required="Message" placeholder="Bericht"></textarea>
				<input type="text" name="naam" id="naam" required="Name" placeholder="Naam"/> <b>*</b><br />
				<input type="text" name="adres" id="adres" placeholder="Adress" required="Adress"/> <b>*</b><br />
				<input type="email" placeholder="Email adres" pattern="[^ @]*@[^ @]*.*" name="email" id="email" required="E-mail"/> <b>*</b><br />
				<input type="submit" name="send" value="verzenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
				<input type="reset" name="clear" value="wis formulier" class="clear-button"  onmouseover="this.className='btn btnclear'" onmouseout="this.className='clear-button'" >
				<input id="check" type="text" name="url" value="" placeholder="leave empty">

			</form>
		</div>
	</div>
</div>

