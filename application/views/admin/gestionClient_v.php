<h1><?php echo $titre ?></h1>
	Liste des clients
	<br /><br />
	<?php if($mesclients !=null): ?>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td align="center"><b>Nom</b></td>
		<td align="center"><b>Email</b> </td>
		<td align="center"><b>Droit de commande</b> </td>
		<td align="center"><b>Ajouter / supprimer un droit</b> </td>
	</tr>
	<?php foreach($mesclients as $r): ?>
	
	<tr>
		<td align="center"><?=$r -> nom ?></td>
		<td align="center"><?=$r -> email ?></td>
		
		<td align="center" value="<?=$r -> droitCommande ?>"><?php
		if($r ->droitCommande == 1){
			$droit = "Ayant droit";
		}else $droit ="N'ayant pas droit"; ?>
		<?= $droit ?>
		</td>
		
		<td align="center" value="<?=$r -> droitCommande ?>"><?php
		if($r ->droitCommande == 1){ ?>
			<img src="/fruitslegumes/assets/images/croix.png" alt=""/><?php
		}else if($r ->droitCommande == 0){
			?><img src="/fruitslegumes/assets/images/valide.jpg" alt=""/>		
		<?php } ?>
		</td>
		
		
		
	
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>
