<div id="content">


	<!-- SELECTORS -->
	<div id="data_cont">
		<?php include '_includes/facts.php' ?>
	</div>
	<div id="find_cont">
		<div id="postcode">
			<form name="search" id="clear" method="post" action="index.php">
				<input type="submit" id="clear" name="go" value="Alle" />
				<!-- <label>Toon alle zaken</label> -->
			</form>
 			<form name="search" id="search" method="post" action="index.php">
				<input type="text" name="find" id="find" value="Plaats of Type" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Postcode':this.value;"/>
				<input type="submit" id="go" name="go" value="Ga" />
			</form>
			
		</div>
	</div>	
	

	<?php include '_php/search_det.php' ?>
</div>

