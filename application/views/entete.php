<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titre ?></title>
	<link href="<?php echo base_url()?>dist/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>dist/css/jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/js/css/craftyslide.css" />
	
	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/js/craftyslide.js"></script>	
	<script src="assets/js/fonctions.js"></script>	
</head>
<body>	
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/fruitslegumes/index.php">Aux BeauFruits & Légumes</a>
        </div>
        <div class="navbar-collapse collapse">

        <?php if($titre):?> 
        	<?php $attributes2 = array('class' => 'decoration'); ?>
        	<?php if(!isset($droit)):?>
        		<?php $attributes = array('class' => 'navbar-form navbar-right'); ?>
        		<?php $attributes2 = array('class' => 'decoration'); ?>
				<?php echo form_open('appli_c/deconnexion',$attributes); ?>
				<label class="texte">Bonjour <?= $this->session->userdata('nom')?></label>
        		<button class="btn btn-success3"><?= anchor('appli_c/deconnexion', 'Deconnexion',$attributes2) ?></button>
        		<?php echo form_close(); ?>
        	<?php else: ?>	
	      		<?php $attributes = array('class' => 'navbar-form navbar-right'); ?>
	 		  	<?php echo form_open('appli_c/aff_connexion',$attributes); ?>
	            <div class="form-group">
	              <input class="form-control" placeholder="Login" type="text" name="nom" value="<?php echo set_value('nom'); ?>" />
	            </div>
	            <div class="form-group">
	            	 <input class="form-control" placeholder="Mot de passe" type="password" name="mdp" value="<?= set_value('mdp'); ?>" />
	            </div>
	            <button type="submit" class="btn btn-success">Connexion</button>
	            <button class="btn btn-success2"><?= anchor('appli_c/inscription', 'Inscription',$attributes2) ?></button>
            <?php endif; ?>
	    <?php echo form_close(); ?>
	    <?php endif; ?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
</br>