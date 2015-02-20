<div id="wrapper">


	<?php
//		$find = $_POST['find'];
//		$id = $_REQUEST['id'];
//		mysqli_query($connect,"SET NAMES 'utf8'");

		if (isset($_POST['find']))
	    {
	    $find = $_POST['find'];
	    }
	    else
 		$_POST['find']="undefine";
//	    $id = $_REQUEST['id'];
//		}
//	    $_REQUEST['id']="undefine";
//	    }
 		if (isset($_REQUEST['id']))
 		{
 			$id = $_REQUEST['id'];
 		}
 		else
 		$_REQUEST['id']="undefine";

		mysqli_query($connect,"SET NAMES 'utf8'");
	?>


	<!-- Query  -->

	<?php
		//Now we search for our search term, in the field the user specified
			$result = mysqli_query($connect,"	SELECT *
							FROM zaken
							LEFT JOIN category
							ON zaken.cat_id = category.cat_id
							WHERE zaak_id = '$id'
						");

			mysqli_data_seek($result,$id);
			$row=mysqli_fetch_row($result);
			$f1=html_entity_decode($row[7]);
			$f2=html_entity_decode($row[3]);
			$f3=html_entity_decode($row[5]);
			$f4=html_entity_decode($row[4]);
			$f5=html_entity_decode($row[6]);
			$f6=html_entity_decode($row[15]);
			$f7=html_entity_decode($row[8]);
			$f8=html_entity_decode($row[0]);
			$f9=html_entity_decode($row[9]);
			$f10=html_entity_decode($row[1]);

			if ( $f9 == 0 ) { $f9 = 'verkocht'; } else { $f9 = '' ; }

	?>

	<!-- Dbase Content Layout -->
	<h1><?php echo htmlspecialchars_decode($f6);?> <span id="small"> <b>*</b> <?php echo htmlspecialchars_decode($f2);?></span></h1>

	<div id="detail">
		<div id="img">
			<div class="<?php echo htmlspecialchars_decode($f9);?>"><?php echo htmlspecialchars_decode($f9);?></div>
			<img src="_img/zaken/<?php echo htmlspecialchars_decode($f7);?>" alt="<?php echo htmlspecialchars_decode($f7); ?>">
		</div>
		<h6>Omschrijving</h6>
		<?php echo htmlspecialchars_decode($f1); ?>

		<h6>Huur</h6>
		<?php echo htmlspecialchars_decode($f4); ?> &euro;

		<h6>Prijs</h6>
		<?php echo htmlspecialchars_decode($f3); ?> &euro;
		<h6>Redenen van verkoop</h6>
		<?php echo htmlspecialchars_decode($f5); ?>

		<h6>Referentie</h6>
		<?php echo htmlspecialchars_decode($f6); ?> <?php echo htmlspecialchars_decode($f10); ?> - <?php echo htmlspecialchars_decode($f8); ?><br><br>
		<a href="contact2.php?zaak=<?php echo htmlspecialchars_decode($f6); ?> <?php echo htmlspecialchars_decode($f8); ?> <?php echo htmlspecialchars_decode($f2); ?>#data_cont" id="mailref">Interesse, laat het ons weten!</a>
	</div>




</div>