<div id="container2">
    <div>
    	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

        <h1>Inscription</h1>
        <?php echo form_open('appli_c/inscription'); ?>

        <label for="nom">Login :</label>
        <input type="text" name="nom" value="<?php echo set_value('nom');?>" />
        <?php echo form_error('nom','<span class="error">',"</span>");?>
        <br/>

        <label for="email">Email :</label>
        <input type="text" name="email" value="<?php echo set_value('email');?>" />
        <?php echo form_error('email','<span class="error">',"</span>");?>
        <br/>

        <label for="mdp">Mot de passe:</label>
        <input type="password" name="mdp" value="<?= set_value('mdp');?>" />
        <?php echo form_error('mdp','<span class="error">',"</span>");?>
        <br/>
        <label for="pass2">Confirmation Mot de passe:</label>
        <input type="password" name="pass2" value="<?= set_value('pass2');?>" />
        <?php echo form_error('pass2','<span class="error">',"</span>");?>
        <br/>
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
        <br/>
        <input type="submit" value="Envoyer" />

        <?php echo form_close(); ?>
        <p><?= anchor('appli_c/mdp_oublie','Mot de passe oublié ?')?></p>
</div>
