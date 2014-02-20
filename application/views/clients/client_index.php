<div id="container">
    <div>
		<h1>Espace client</h1>
		<?php if($droitCommande==1){ ?>
			<a id="lien" href="<?php echo site_url('client/produit_c')?>">Passer une commande</a>
		<?php }else{ ?>
			Aucun droits
		<?php } ?>
	</div>
</div>