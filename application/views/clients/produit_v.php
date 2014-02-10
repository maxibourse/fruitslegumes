	<div id="body">
	Les produits disponibles
	
		<?php if($mesproduits !=null): ?>
		<table border="2">
	
		<?php foreach($mesproduits as $r): ?>
	
		<tr>
			<td><?=$r -> disponible ?></td>
			<td><?=$r -> designation ?></td>
			<td><?=$r -> prix ?></td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
		
	</div>