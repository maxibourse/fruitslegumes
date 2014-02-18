	
	<div id="body">		
	
	<h3>Liste des produits</h3>
	
		<?php if($mesproduits !=null): ?>
		<table class="table table-striped" border="2">
			
		<tr class="success"><td align="center" colspan="7">Description produit</td><td align="center" colspan="2">Commande</td></tr>
		<tr class="info"><td>Code</td><td>Categorie</td><td>Libelle produit</td><td>Origine</td><td>Prix €</td><td>Type</td><td>Disponible</td><td class="centrer cellAchat">Type</td><td class="centrer cellAchat">Quantité</td></tr>
		

		<?php foreach($mesproduits as $r): ?>
		<tr>
			<td class="centrer"><?=$r -> codeProduit ?></td>
			<td><?=$r -> nomCategorie ?></td>
			<td><?=$r -> designation ?></td>
			<td><?=$r -> description ?></td>
			<td class="centrer"><?=$r -> prix ?></td>
			<td class="centrer"><?=$r -> typeprix ?></td>
			<td class="centrer disponibilite"><?=$r -> disponible ?></td>
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
			<td class="danger centrer"><input type="number" value="0" min="0"/></td> 
			
		</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
		
		
	</div>
	