<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vue des produits</title>
</head>
<body>
	<h1><?php echo $titre ?></h1>
	les produits
	
	<?php if($mesproduits !=null): ?>
	<table border="2">
	
	<?php foreach($mesproduits as $r): ?>
	
	<tr>
		<td><?=$r -> disponible ?></td>
		<td><?=$r -> designation ?></td>
		<td><?=$r -> prix ?></td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
		
		<a href="<?php echo site_url('admin/produit_c/creer_produit')?>">Ajouter un produit</a>

</body>
</html>