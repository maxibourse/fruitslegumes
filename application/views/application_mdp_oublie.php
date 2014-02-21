<h1>Mot de passe oublié</h1>
        <br/>
        <?php
        $attributes = array('class' => 'formInscription');
        echo form_open('appli_c/mdp_oublie',$attributes); ?>

		<div class="form-group">
        	<label class="col-sm-2 control-label" for="email">Email :</label>
        	<div class="col-sm-10">
       			<input type="text" class="form-control control2" placeholder="E-mail" name="email" />
       		</div>
       	</div>
        <?php if(isset($message)) echo '<br/>'.$message.'<br/>' ?>

        <br/>
        <div class="col-sm-2 control-label">
        	<input type="submit" class="btn btn-default" value="Renvoyer le mot de passe" />
		</div>
        <?php echo form_close(); ?>
        <br/>