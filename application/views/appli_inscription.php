<div id="container2">
    <div>
    	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

        <h1>Inscription</h1>
        <?php echo form_open('appli_c/inscription'); ?>

        <label class="formulaire" for="nom">Login :</label>
        <input class="inputformulaire" type="text" name="nom" value="<?php echo set_value('nom');?>" />
        <?php echo form_error('nom','<span class="error">',"</span>");?>
        <br/>

        <label class="formulaire" for="email">Email :</label>
        <input class="inputformulaire" type="text" name="email" value="<?php echo set_value('email');?>" />
        <?php echo form_error('email','<span class="error">',"</span>");?>
        <br/>

        <label class="formulaire" for="mdp">Mot de passe:</label>
        <input class="inputformulaire" type="password" name="mdp" value="<?= set_value('mdp');?>" />
        <?php echo form_error('mdp','<span class="error">',"</span>");?>
        <br/>
        <label class="formulaire" for="pass2">Confirmation Mot de passe:</label>
        <input class="inputformulaire" type="password" name="pass2" value="<?= set_value('pass2');?>" />
        <?php echo form_error('pass2','<span class="error">',"</span>");?>
        <br/>
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
        <br/>
        <input class="bouton" type="submit" value="Envoyer" />

        <?php echo form_close(); ?>
		<p id="inscription"><?= anchor('appli_c/deconnexion','Se connecter')?></p>
        <p id="oublier"><?= anchor('appli_c/mdp_oublie','Mot de passe oublié ?')?></p>
</div>
