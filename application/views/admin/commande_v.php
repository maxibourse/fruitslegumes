<h1><?php echo $titre ?></h1>
	Liste des commandes
	<br /><br />
	<?php if($mescommandes !=null): ?>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td width="10%" align="center"><b>Date de la commande</b></td>
		<td width="10%" align="center"><b>Prix Total</b> </td>
	</tr>
	<?php foreach($mescommandes as $r): ?>
	
	<tr>
		<td width="10%" align="center"><?=$r -> dateCommande ?></td>
		<td width="10%" align="center"><?=$r -> prixTotal . " €"?></td>		
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>

