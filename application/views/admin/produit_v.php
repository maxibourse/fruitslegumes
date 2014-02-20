<h1><?php echo $titre ?></h1>
	Liste des produits
	<br /><br />
	<?php if($mesproduits !=null): ?>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td width="10%" align="center"><b>Disponibilité</b></td>
		<td width="10%" align="center"><b>Nom du produit</b> </td>
		<td width="30%" align="center"><b>Commentaire</b> </td>
		<td width="10%" align="center"><b>Prix </b> </td>
		<td width="10%" align="center"><b>Code du produit </b></td>
		<td width="10%" align="center"><b>Origine </b></td>
	</tr>
	<?php foreach($mesproduits as $r): ?>
	
	<tr>
		<td width="10%" align="center"><?=$r -> disponible ?></td>
		<td width="10%" align="center"><?=$r -> designation ?></td>
		<td width="30%" align="center"><?=$r -> commentaire ?></td>
		<td width="10%" align="center"><?=$r -> prix ." €"?></td>
		<td width="10%" align="center"><?=$r -> codeProduit ?></td>
		<td width="10%" align="center" value="<?=$r -> idOrigine ?>"><?=$r -> description ?></td>
		
		
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>
		<a class="bouton" href="<?php echo site_url('admin/produit_c/nouveau_produit')?>">Ajouter un produit</a>
