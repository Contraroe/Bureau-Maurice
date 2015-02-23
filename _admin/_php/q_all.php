<?php include '../_php/db_config.php' ?>
<?php include '../_php/db_connect.php' ?>
<div id="left_all">

<?php
	mysqli_query($connect,"SET NAMES 'utf8'");

	if (isset($_POST['find']))
	    {
	    $find = $_POST['find'];
		}
	    else
	    {
	    $_POST['find']="undefine";
	    }


	$sort= $_REQUEST['sort'];

	if ($sort === null ){ $sort = '1';};
?>
	<h1>Alle Handelszaken</h1>

	<table>
		<tr id="sorting">
			<td  colspan="2">
				Selecteer : <?php echo $find; ?>
			<td>
			<td  colspan="4" width="400px">
				<ul>
					<li><a href="index.php?sort=3" class="<?php if ($sort === '3') { echo "active";}; ?>">inactieve</a></li>
					<li><a href="index.php?sort=2" class="<?php if ($sort === '2') { echo "active";}; ?>">actieve</a></li>
					<li><a href="index.php?sort=1" class="<?php if ($sort === '1') { echo "active";}; ?>">alle</a></li>
				</ul>
			</td>
			<td colspan="3">
				<form name="search" id="find" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="text" name="find" id="find" value="Plaats of Type" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Postcode':this.value;"/>
					<input type="submit" id="go" name="go" value="Ga" />
				</form>
			</td>
		</tr>
		<tr id="header">
			<td>Actief</td>
			<td>Datum/Tijd</td>
			<td>Ref.</td>
			<td>Type</td>
			<td>Regio</td>
			<td>Prijs </td>
			<td>Status</td>
			<td> BM Ref.</td>
			<td>Wijzig</td>
		</tr>

	<!-- Dbase Content -->
<?php

	mysqli_query($connect,"SET NAMES 'utf8'");

	// print $sort;
	if(!empty($find)) {
		$result = mysqli_query($connect," SELECT *
						FROM zaken
						LEFT JOIN category
						ON zaken.cat_id = category.cat_id
						WHERE active = '1'
						AND ( locatie LIKE '%$find%' OR regio LIKE '%$find%' OR ref LIKE '%$find%' OR cat LIKE '%$find%' )
						ORDER BY zaak_id ASC
					");
	} else if($sort === '2') {
		$result = mysqli_query($connect," SELECT *
						FROM zaken
						LEFT JOIN category
						ON zaken.cat_id = category.cat_id
						WHERE active = '1'
						ORDER BY zaak_id ASC
					");
	} else if ($sort === '3') {
		$result = mysqli_query($connect," SELECT *
						FROM zaken
						LEFT JOIN category
						ON zaken.cat_id = category.cat_id
						WHERE active = '0'
						ORDER BY zaak_id ASC
						");
	} else {
		$result = mysqli_query($connect," SELECT *
						FROM zaken
						LEFT JOIN category
						ON zaken.cat_id = category.cat_id
						ORDER BY zaak_id ASC
						");
	};



	$numa=mysqli_num_rows($result);

	if (!empty($numa)) {

	$i=0;
	while ($i < $numa) {
		mysqli_data_seek($result,$i);
		$row=mysqli_fetch_row($result);
		$f1=html_entity_decode($row[3]); //regio
		$f2=html_entity_decode($row[5]); // prijs
		$f3=html_entity_decode($row[4]); //huur
		$f4=html_entity_decode($row[15]); //cat
		$f5=html_entity_decode($row[0]); //zaak_id
		$f6=html_entity_decode($row[9]); // status
		$f7=html_entity_decode($row[10]); // actief
		$f8=html_entity_decode($row[12]); // time
		$f9=html_entity_decode($row[13]); // ref

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