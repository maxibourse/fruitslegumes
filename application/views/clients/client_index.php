<div id="container">
	
    <div>
		<h1>Espace client</h1>
		<?php if($mescommandes !=null): ?>
		<h3>Commandes passées</h3>
			<table class="table" border="2">
			<tr>
				<th class="centrer cellAchat">N° Commande</th>
				<th class="centrer cellAchat">Date de la commande</th>
				<th class="centrer cellAchat">Semaine</th>
				<th class="centrer cellAchat">Prix total</th>
				<th class="centrer cellAchat">Lieu</th>
				<th class="centrer cellAchat">Détails</th>
			</tr>
			
			<?php foreach($mescommandes as $commande):?>
		
				<?php echo form_open('client/produit_c/getDetail');?>				
					<tr>
						<input type="hidden" name="idCommande" value="<?php echo $commande->idCommande;?>"/>
						<td><?php echo $commande->idCommande;?></td>
						<td><?php echo $commande->dateCommande;?></td>
						<td><?php echo $commande->idSemaine;?></td>
						<td><?php echo $commande->prixTotal;?> €</td>
						<td><?php echo $commande->nomLieu;?></td>

						<td><input type="submit" value="Details" />
					<tr/>
				
				<?php echo form_close();?>
			<?php endforeach;?>
		
			</table><br/>
		<?php endif; ?>
		
		<?php if($resultat==1){ ?>
			<a id="lien" href="<?php echo site_url('client/produit_c')?>">Passer une commande</a>
		<?php }else{ ?>
			Vous n'êtes pas autorisé a commander, <a id="lien" href="<?php echo site_url('client/produit_c/demandeDroit')?>">Faire une demande</a>
		<?php } ?>
	</div>
</div>