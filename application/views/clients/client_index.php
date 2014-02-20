<div id="container">
    <div>
		<h1>Espace client</h1>
		<?php if($resultat==1){ ?>
			<a id="lien" href="<?php echo site_url('client/produit_c')?>">Passer une commande</a>
		<?php }else{ ?>
			Vous n'êtes pas autorisé a commander, <a id="lien" href="<?php echo site_url('client/produit_c/demandeDroit')?>">Faire une demande</a>
		<?php } ?>
	</div>
</div>