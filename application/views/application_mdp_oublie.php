<h1>Mot de passe oublié</h1>
        <br/>
        <?php
        $attributes = array('class' => 'formInscription');
        echo form_open('appli_c/mdp_oublie',$attributes); ?>

		<?php echo ($this->client_m->get_email_client()); ?>
		Vous avez perdu votre mail ?
		<br/>
        <br/>
        <div class="col-sm-2 control-label">
        	<input type="submit" class="btn btn-default" value="Renvoyer par mail" />
		</div>
        <?php echo form_close(); ?>
        <br/>