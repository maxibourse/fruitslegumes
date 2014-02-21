<div id="container2">
	<title>Vue des lieux de retraits</title>
	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

	<h1> Ajouter un nouveau lieu de retrait </h1> 
	<?php echo form_open('admin/gestionLieux_c/ajouterLieu'); ?>
		<form>
				<label class="formulaire"> Lieu de retrait </label> 
				<input class="inputformulaire" type='text' value='' name='nomLieu' value="<?php echo set_value('nomLieu'); ?>">	
				<br /><br />
			 	<input class="bouton" type='submit' value='Ajouter' name='ajoutLieu' >  
		
		</form>
</div>