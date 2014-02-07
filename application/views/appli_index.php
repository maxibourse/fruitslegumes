<div id="container">

<div id="slideshow">
  <ul>
    <li>
      <img src="assets/js/images/oranges.jpg" alt="" />
    </li>
    <li>
      <img src="assets/js/images/patates.jpg" alt="" />
    </li>
    <li>           
      <img src="assets/js/images/tomates.jpg" alt="" />
    </li>                          
  </ul>
</div>
<div style="visibility:hidden">
	<h1>Connexion</h1>
		<?php if($titre):?>
	    <?php echo form_open('appli_c/aff_connexion'); ?>
	        <label class="formulaire" for="nom">Login :</label>
	        <input class="inputformulaire" type="text" name="nom" value="<?php echo set_value('nom'); ?>" />
	        <?php echo form_error('nom', '<span class="error">', "</span>"); ?>
	        <br/>
	        <label class="formulaire" for="mdp">Mot de passe :</label>
	        <input class="inputformulaire" type="password" name="mdp" value="<?= set_value('mdp'); ?>" />
	        <?php echo form_error('mdp', '<span class="error">', "</span>"); ?>
	        <?php
				if (isset($erreur))
					echo '<span class="error">' . $erreur . "</span>";
			?>
	        <br/>
	        <input class="bouton" type="submit" value="Connexion" />
	
	        <?php echo form_close(); ?>
	        <p id="inscription"><?= anchor('appli_c/inscription', 'Inscrivez vous !') ?></p>
	        <p id="oublier"><?= anchor('appli_c/mdp_oublie', 'Mot de passe oublié ?') ?></p>
	    <?php endif ?>
	    <?php if($titre=="deconnexion"):?>
	        <?php echo form_open('appli_c/deconnexion'); ?>
	        <input class="bouton" type="submit" value="Deconnexion" />
	        <?php echo form_close(); ?>
	    <?php endif ?>
</div>
</div>
