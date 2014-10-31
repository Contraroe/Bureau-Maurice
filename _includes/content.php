<div id="content">


	<!-- SELECTORS -->
	<div id="data_cont">

	</div>
	<div id="find_cont">
		<div id="postcode">
			<form name="search" id="clear" method="post" action="<?=$PHP_SELF?>">
				<input type="submit" id="clear" name="go" value="Alles" /><label>Toon alle zaken</label>
			</form>
			<form name="search" id="search" method="post" action="<?=$PHP_SELF?>">
				<label>Zoek op plaatsnaam of postcode:</label>
				<input type="text" name="find" id="find" value="" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'':this.value;"/>
				<input type="submit" id="go" name="go" value="Ga" />
			</form>
			
		</div>
	</div>	
	

	<?php include '_php/search.php' ?>
</div>

