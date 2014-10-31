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
				 <select name="pricerange" size="1" id="pricerange">
					<option value="">Price Range</option>
					<option value="1">$&nbsp;10 - $&nbsp;20</option>
					<option value="2">$&nbsp;21 - $&nbsp;30</option>
					<option value="3">$&nbsp;31 - $&nbsp;50</option>
					<option value="4">$&nbsp;51 - $&nbsp;75</option>
					<option value="5">$&nbsp;76 - $&nbsp;100</option>
					<option value="6">$&nbsp;101 - $&nbsp;200</option>
					<option value="7">$&nbsp;201 - Plus</option>
				</select> 
				<!-- <label>Zoek op plaatsnaam of postcode:</label> -->
				<input type="text" name="find" id="find" value="Plaast of postcode" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Plaast of postcode':this.value;"/>
				<input type="submit" id="go" name="go" value="Ga" />
			</form>
			
		</div>
	</div>	
	

	<?php include '_php/search.php' ?>
</div>

