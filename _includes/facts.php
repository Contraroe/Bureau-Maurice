<?php 
	//Now we search for our search term, in the field the user specified
	$result_actief = mysql_query("SELECT * FROM zaken WHERE active = 1");
	$active = mysql_num_rows($result_actief);
	$result_verkocht = mysql_query("SELECT * FROM zaken WHERE active = 0");
	$verkocht = mysql_num_rows($result_verkocht);
	$all = mysql_query("SELECT * FROM zaken WHERE active <= 1");
	$alle = mysql_num_rows($all);
?>



<ul id="facts">
	<li>Totaal aantal handelzaken : <b><?php echo htmlspecialchars($alle); ?></b></li>
	<li>Verkocht : <b><?php echo htmlspecialchars($verkocht); ?></b></li>
	<li>Te koop : <b><?php echo htmlspecialchars($active); ?></b></li>
	<li id="img"class="red"><a href="contact.php"></a></li>
	<li class="red"><b>0489 . 612 . 044</b> ( 7 / 7 )</li>
</ul>
