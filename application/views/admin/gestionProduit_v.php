<h1><?php echo $titre ?></h1>
	Liste des produits
	<br /><br />
	<?php echo form_open('admin/gestionProduit_c/supprimerProduit'); ?>
	
	<?php if($mesproduits !=null): ?>
	<form>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td width="10%" align="center"><b>Disponibilité</b></td>
		<td width="10%" align="center"><b>Nom du produit</b> </td>
		<td width="30%" align="center"><b>Commentaire</b> </td>
		<td width="10%" align="center"><b>Prix </b> </td>
		<td width="10%" align="center"><b>Type Prix </b> </td>
		<td width="10%" align="center"><b>Code du produit </b></td>
		<td width="10%" align="center"><b>Origine </b></td>
		<td width="10%" align="center"><b>Supprimer un produit </b></td>
	</tr>
	<?php foreach($mesproduits as $r): ?>
	
	<tr>
		<td width="10%" align="center" value="<?=$r -> disponible ?>">
			<?php 
			if($r -> disponible == 0){
				$dispo = 'Oui';
			}
			else 
				$dispo = 'Non';
		?>
		<?=$dispo ?>
			
		</td>
		<td width="10%" align="center"><?=$r -> designation ?></td>
		<td width="30%" align="center"><?=$r -> commentaire ?></td>
		<td width="10%" align="center"><?=$r -> prix ." €"?></td>
		<td width="10%" align="center"><?=$r -> typeprix ?></td>
		<td width="10%" align="center"><?=$r -> codeProduit ?></td>
		<td width="10%" align="center" ><?=$r -> description ?></td>
		<td align="center">
			<a href="admin/gestionProduit_c/supprimer_produit">
				<img src="/fruitslegumes/assets/images/croix.png" alt="" onClick=""/></a>
		</td>
		
		
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>
		<a class="bouton" href="<?php echo site_url('admin/gestionProduit_c/nouveau_produit')?>">Ajouter un produit</a>
</form>