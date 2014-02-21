<div>
    <div class="form-horizontal">
    	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

        <h1>Demande de droit de commande</h1>
        <br/>
        <?php echo form_error('raison','<span class="error">',"</span>");?>
        <br/><br/>
        <?php
        	$attributes = array('class' => 'formDemandeDroit');
        	echo form_open('client/produit_c/envoiMail',$attributes); ?>
 		
	 		<div class="form-group">
	 			
	        	<label class="col-sm-2 control-label">Raison de la demande :</label>
	        	<div class="col-sm-10">
	        		<textarea rows="6" class="form-control control2" placeholder="Ecrivez quelques lignes..." name="raison"></textarea>
	        	</div>
	        </div>
	         <?php if(isset($message)) echo '<br/>'.$message.'<br/>' ?>

	        <br/>
	        <div class="col-sm-2 control-label">
	        	<input type="submit" class="btn btn-default" value="Envoyer" />
			</div>
        <?php echo form_close(); ?>
</div>
