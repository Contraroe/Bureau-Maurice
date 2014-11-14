<?php include '../_php/db_config.php' ?>
<?php include '../_php/db_connect.php' ?>

<div id="left_all">

<?php

	mysql_query("SET NAMES 'utf8'");
//Now we search for our search term, in the field the user specified
	$result = mysql_query("	SELECT * 
					FROM zaken
					LEFT JOIN category 
					ON zaken.cat_id = category.cat_id
					ORDER BY zaak_id ASC
					");
	$numa=mysql_numrows($result);

	if (!empty($numa)) {
?>
	<h1>Alle Handelszaken</h1>
	<table>

		<tr id="header">
			<td>Referentie</td> 
			<td>Type</td>
			<td>Regio</td>
			<td>Prijs </td>
			<td>Status</td>
			<td>Wijzig</td>
		</tr>
	<!-- Dbase Content -->
<?php
	$i=0;
	while ($i < $numa) {
		$f1=html_entity_decode(mysql_result($result,$i,"regio"));
		$f2=html_entity_decode(mysql_result($result,$i,"prijs"));
		$f3=html_entity_decode(mysql_result($result,$i,"huur"));
		$f4=html_entity_decode(mysql_result($result,$i,"cat"));
		$f5=html_entity_decode(mysql_result($result,$i,"zaak_id"));
		$f6=html_entity_decode(mysql_result($result,$i,"status"));

		if ( $f6 == 0 ) { $f6 = 'verkocht'; } else { $f6 = 'te koop' ; }

?>	

<?php include '_includes/all_data.php' ?>


<?php
	$i++;
	}
}
?>
</table>
</div>