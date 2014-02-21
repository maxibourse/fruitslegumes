<div id="container">
	
    <div>
		<h1>Espace client</h1>
		<?php if($details !=null): ?>
		<h3>Commande en détail</h3>
			<table class="table" border="2">
			<tr>
				<th class="centrer cellAchat">idCommande</th>
				<th class="centrer cellAchat">Nom produit</th>
				<th class="centrer cellAchat">Quantité</th>
				<th class="centrer cellAchat">Prix</th>
				<th class="centrer cellAchat">Type de prix</th>
			</tr>
			
			<?php foreach($details as $commande):?>
					
					<tr>
						<td><?php echo $commande->idCommande;?></td>
						<td><?php echo $commande->nomProduit;?></td>
						<td><?php echo $commande->quantite;?></td>
						<td><?php echo $commande->prix;?> €</td>
						<td><?php echo $commande->designation;?></td>
					<tr/>
				
			<?php endforeach;?>
		
			</table><br/>
		<?php endif; ?>
		
		<a id="lien" href="<?php echo site_url('client_c')?>">Retour</a>
	</div>
</div>