<div id="content">
	<div id="articles">
		<div id="total_article"><h3>Vous avez <?php echo $this->cart->total_items(); ?> Articles</h3></div>
		
		<?php if($this->cart->contents()):?>
		
		<table class="table" border="2">
			<tr>
				<th class="centrer cellAchat">Produit</th>
				<th class="centrer cellAchat">Prix (unité)</th>
				<th class="centrer cellAchat">Type prix</th>
				<th class="centrer cellAchat">Quantité</th>
				<th class="centrer cellAchat">Total</th>
				<th class="centrer cellAchat" colspan="1">Modifier/Supprimer</th>
			</tr>

		
		<?php foreach($this->cart->contents() as $produit):?>
		
		<?php echo form_open('client/shop_c/update');?>
		
		<input type="hidden" name="colone" id="colone" value="<?php echo $produit['rowid'];?>" />
		
			<tr>
				<td><?php echo $produit['name'];?></td>
				<td><?php echo $produit['price'];?> €</td>
				<td><?php echo $produit['typeprix'];?></td>
				<td><input type="number" name="quantite" min="0" value="<?php echo $produit['qty'];?>" /></td>
				<td><?php echo $produit['price'] * $produit['qty'];?> €</td>
				<td><input type="submit" value="Modifier" />
				<a class="decoration" href="<?php echo site_url('client/shop_c/delete/'.$produit['rowid']);?>"><img src="/fruitslegumes/assets/images/croix.png" alt="" /></a></td>
			<tr/>
		
		<?php echo form_close();?>
		<?php endforeach;?>
		
		</table>
		
		<strong>Total de vos achats : <?php echo $this->cart->total();?> Euros</strong>
		<br/>
		<br/>
		<?php echo form_open('client/shop_c/deleteAll');?>
			<input type="submit" class="btn btn-default" value="Vider le panier"/>
		<?php echo form_close();?>
		<br/>
		<?php echo form_open('client/shop_c/commande');?>
			<input type="hidden" name="prixtotal" value="<?php echo $this->cart->total();?>"/>
			<input type="submit" class="btn btn-default" value="Commander"/>
		<?php echo form_close();?>
		<br/><br/>
		<?php else:?>
			<p>Aucun article dans le panier</p>
		
		<?php endif; ?>
		
		<?= anchor('client/produit_c', 'Revenir aux produits') ?>
	</div>
	
</div>
