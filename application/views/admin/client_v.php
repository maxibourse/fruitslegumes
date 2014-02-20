<h1><?php echo $titre ?></h1>
	Liste des clients
	<br /><br />
	<?php if($mesclients !=null): ?>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td align="center"><b>Nom</b></td>
		<td align="center"><b>Email</b> </td>
		<td align="center"><b>Droit de commande</b> </td>
		<td align="center"><b>Accepter</b> </td>
		<td align="center"><b>Refuser</b> </td>
	</tr>
	<?php foreach($mesclients as $r): ?>
	
	<tr>
		<td align="center"><?=$r -> nom ?></td>
		<td align="center"><?=$r -> email ?></td>
		<td align="center"><?=$r -> droitCommande ?></td>
		<td align="center"><img src="/assets/images/valide.jpg"/> </td>
		<td align="center"><img src="/assets/images/croix.png"/> </td>
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>
