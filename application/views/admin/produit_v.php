<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vue des produits</title>

	<link rel="stylesheet" href="css/moncss.css"/>
</head>
<body>

<div id="container">
	<h1><?php echo $titre ?></h1>

	<div id="body">
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
	
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>