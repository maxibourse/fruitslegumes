<rss version="2.0"><channel><title>Nom des produits</title><description>Site de fruits et legumes</description>
	<?php foreach($mesproduits as $r): ?>
	
	<item>
		<title><?=$r -> designation ?></title>
		<description>Prix : <?=$r -> prix ?> €</description>
	</item>
		<?php endforeach; ?>
</rss>
