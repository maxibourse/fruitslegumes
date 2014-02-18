<div>
    <div class="form-horizontal">
    	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

        <h1>Inscription</h1>
        <br/>
        <?php
        	$attributes = array('class' => 'formInscription');
        	echo form_open('appli_c/inscription',$attributes); ?>
 		<div class="form-group">
        	<label class="col-sm-2 control-label" for="nom">Login :</label>
        	<div class="col-sm-10">
        		<input type="text" class="form-control control2" placeholder="Nom" name="nom" value="<?php echo set_value('nom');?>" />
        	</div>
        </div>
        <?php echo form_error('nom','<span class="error">',"</span>");?>

		<div class="form-group">
        	<label class="col-sm-2 control-label" for="email">Email :</label>
        	<div class="col-sm-10">
       			<input type="text" class="form-control control2" placeholder="E-mail" name="email" value="<?php echo set_value('email');?>" />
       		</div>
       	</div>
        <?php echo form_error('email','<span class="error">',"</span>");?>

		<div class="form-group">
        	<label class="col-sm-2 control-label" for="mdp">Mot de passe:</label>
        	<div class="col-sm-10">
        		<input type="password" class="form-control control2" placeholder="Mot de passe" name="mdp" value="<?= set_value('mdp');?>" />
        	</div>
        </div>
        <?php echo form_error('mdp','<span class="error">',"</span>");?>

		<div class="form-group">
        	<label class="col-sm-2 control-label" for="pass2">Confirmation Mot de passe:</label>
        	<div class="col-sm-10">
        		<input type="password" class="form-control control2" name="pass2" value="<?= set_value('pass2');?>" />
        	</div>
        </div>
        <?php echo form_error('pass2','<span class="error">',"</span>");?>
        <br/>
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
        <br/>
        <div class="col-sm-2 control-label">
        	<input type="submit" class="btn btn-default" value="Envoyer" />
		</div>
        <?php echo form_close(); ?>
        <br/>
        <a href="mdp_oublie">Mot de passe oublié ?</a>
</div>
