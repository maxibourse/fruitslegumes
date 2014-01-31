<div id="container">
    <?php if($titre):?>
    <h1>Connexion</h1>

    <?php echo form_open('appli_c/aff_connexion'); ?>
        <label class="formulaire" for="login">Login :</label>
        <input class="inputformulaire" type="text" name="login" value="<?php echo set_value('login');?>" />
        <?php echo form_error('login','<span class="error">',"</span>");?>
        <br/>
        <label class="formulaire" for="pass">Mot de passe :</label>
        <input class="inputformulaire" type="password" name="pass" value="<?= set_value('pass');?>" />
        <?php echo form_error('pass','<span class="error">',"</span>");?>
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
        <br/>
        <input class="bouton" type="submit" value="Connexion" />

        <?php echo form_close(); ?>
        <p id="inscription"><?= anchor('appli_c/inscription','Inscrivez vous !')?></p>
        <p id="oublier"><?= anchor('appli_c/mdp_oublie','Mot de passe oublié ?')?></p>
    <?php endif?>
    <?php if($titre=="deconnexion"):?>
        <?php echo form_open('appli_c/deconnexion'); ?>
        <input class="bouton" type="submit" value="Deconnexion" />
        <?php echo form_close(); ?>
    <?php endif?>
</div>
