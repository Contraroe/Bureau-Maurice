<?php 
	//Now we search for our search term, in the field the user specified
	$result_actief = mysqli_query($connect,"SELECT * FROM zaken WHERE status = 1");
	$active = mysqli_num_rows($result_actief);
	$result_verkocht = mysqli_query($connect,"SELECT * FROM zaken WHERE status = 0");
	$verkocht = mysqli_num_rows($result_verkocht);
	$all = mysqli_query($connect,"SELECT * FROM zaken WHERE status <= 1");
	$alle = mysqli_num_rows($all);
?>



<ul id="facts">
	<li>Totaal aantal handelzaken : <b><?php echo htmlspecialchars($alle); ?></b></li>
	<li>Verkocht : <b><?php echo htmlspecialchars($verkocht); ?></b></li>
	<li>Te koop : <b><?php echo htmlspecialchars($active); ?></b></li>
	<li id="img"class="red"><a href="contact.php#data_cont"></a></li>
	<li class="red"><b>0489 . 612 . 044</b> ( 7 / 7 )</li>
</ul>
