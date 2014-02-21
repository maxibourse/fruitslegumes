<h1><?php echo $titre ?></h1>
	Liste des pays
	<br /><br />
	<?php if($mespays !=null): ?>
	<table class="table table-striped" border="2">
	
	
	<tr>
		<td width="10%" align="center"><b>Pays expéditeur</b></td>
		<td width="10%" align="center"><b>Supprimer</b></td>
		
	</tr>
	<?php foreach($mespays as $r): ?>
	
	<tr>
		<td width="10%" align="center"><?=$r -> description ?></td>
		<td align="center">
				<img src="/fruitslegumes/assets/images/croix.png" alt="" onClick=""/>
		</td>
	</tr>
		<?php endforeach; ?>
	</table>
		<?php endif; ?>
		<br><br>
<a class="bouton" href="<?php echo site_url('admin/gestionPays_c/nouveau_pays')?>">Ajouter un pays exportateur</a>

