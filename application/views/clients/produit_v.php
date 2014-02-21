	
	<div id="body">		
	
	<h3>Liste des produits</h3>
	
		<?php if($mesproduits !=null): ?>
		<br/>
		<?php echo form_open('client/shop_c/panier');?>
			<h4><i>Panier : <?php echo $this->cart->total_items() ?> articles   </i><input type="submit" class="btn btn-default" value="Afficher le panier"/></h4>
		<?php echo form_close();?>
		<br/>
			
		<table class="table table-hover" border="2">
			
		<tr class="success"><td align="center" colspan="7">Description produit</td><td align="center" colspan="3">Commande</td></tr>
		<tr class="info"><td>Code</td><td>Libelle produit</td><td>Categorie</td><td>Origine</td><td>Prix €</td><td>Type</td><td>Disponible</td>
		<td class="centrer cellAchat">Type</td><td class="centrer cellAchat">Quantité</td><td class="centrer cellAchat">Ajouter au panier</td></tr>
		

		<?php foreach($mesproduits as $r): ?>
		<tr>
			<td class="centrer"><?=$r -> codeProduit ?></td>
			<td><?=$r -> designation ?></td>
			<td><?=$r -> nomCategorie ?></td>
			<td><?=$r -> description ?></td>
			<td class="centrer"><?=$r -> prix ?></td>
			<td class="centrer"><?=$r -> typeprix ?></td>
			<td class="centrer disponibilite"><?=$r -> disponible ?></td>

			<?php if($r -> disponible == 1){ ?>
				<?php $attributes = array('class' => 'formulaireAchat'); ?>
				<?php echo form_open('client/shop_c/add',$attributes); ?>
					<input type="hidden" name="id" value="<?= $r -> codeProduit ?>"/>
					<input type="hidden" name="designation" value="<?= $r -> designation ?>"/>
					<input type="hidden" name="typeprix" value="<?= $r -> typeprix ?>"/>
					<input type="hidden" name="prix" value="<?= $r -> prix ?>"/>
					<td class="danger centrer">
						<?php 
						if($r->typeprix == 'Piece'){
							echo '		
								<select disabled name="select">
				 					<option value="1">'.$r -> typeprix.'</option> 
								</select>
							';
						}
						if($r->typeprix == 'Kg'){
							echo '		
								<select disabled name="select">
				 					<option value="2">'.$r -> typeprix.'</option> 
								</select>
							';
						}
						if($r->typeprix == 'Piece/Kg'){
							echo '		
								<select name="select">
				 					<option selected value="1">Piece</option> 
				 					<option value="2">Kg</option> 
								</select>
							';
						}
						?>
		    		</td>
					<td class="danger centrer"><input name="quantite" type="number" value="0" min="0"/></td> 
					<td><input type="image" src="/fruitslegumes/assets/images/panier.png" alt="ok" /></td>
				<?php echo form_close(); ?>
			<?php }else { 
				echo '<td class="danger centrer"></td><td class="danger centrer"></td><td></td>';
			} ?>
		</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
		
		
	</div>
	