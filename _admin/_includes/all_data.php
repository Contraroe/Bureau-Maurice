<?php 
	// $ref = $_REQUEST['ref']; 
	$ref= $_REQUEST['ref'];
?>


	<tr class="<?php if ($ref == $f5) { echo 'active';} ?>">
		<td><a class='actief<?php echo htmlspecialchars($f7); ?>' href="_php/actief.php?ref=<?php echo html_entity_decode($f5); ?>&active=<?php echo htmlspecialchars($f7); ?>"><?php echo htmlspecialchars($f7); ?></a></td> 
		<td><?php echo html_entity_decode($f8); ?></td>
		<td><?php echo html_entity_decode($f5); ?></td>
		<td><?php echo html_entity_decode($f4); ?></td>
		<td><?php echo html_entity_decode($f1); ?></td>
		<td><?php echo html_entity_decode($f2); ?> &euro;</td>
		<td><?php echo html_entity_decode($f6); ?></td>
		<td><?php echo html_entity_decode($f10); ?></td>
		<td><a href="index.php?ref=<?php echo html_entity_decode($f5); ?>">+</a></td>
	</tr>

