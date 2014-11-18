<?php $ref = $_REQUEST['ref']; ?>


	<tr class="<?php if ($ref == $f5) { echo 'active';} ?>">
		<td><?php echo htmlspecialchars_decode($f5); ?></td> 
		<td><?php echo htmlspecialchars_decode($f4); ?></td>
		<td><?php echo htmlspecialchars_decode($f1); ?></td>
		<td><?php echo htmlspecialchars_decode($f2); ?> &euro;</td>
		<td><?php echo htmlspecialchars_decode($f6); ?></td>
		<td><a href="index.php?ref=<?php echo htmlspecialchars_decode($f5); ?>">+</a></td>
	</tr>

