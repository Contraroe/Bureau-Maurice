<div id="frituren">
	<div id="info">
		<h2><?php echo htmlspecialchars($f2); ?></h2><a href="details.php?id=<?php echo htmlspecialchars($f11);?>"><div id="extra">+</div></a>
		<div id="img">
			<div class="<?php echo htmlspecialchars($f12);?>"><?php echo htmlspecialchars($f12);?></div>
			<img src="_img/zaken/<?php echo htmlspecialchars($f10);?>" alt="<?php echo htmlspecialchars($f10); ?>">
		</div>
		<h6><?php echo htmlspecialchars($f7); ?> </h6>
		<b><?php echo htmlspecialchars_decode($f1); ?></b><br><br>
		<b>Prijs</b> : <?php echo htmlspecialchars($f3); ?> &euro;<br>
		<b>Huur</b> : <?php echo htmlspecialchars($f4); ?> &euro;
		
	</div>
</div>