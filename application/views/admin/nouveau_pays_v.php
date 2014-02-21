<div id="container2">
	<title>Vue des pays exportateur</title>
	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

	<h1> Ajouter un nouveau pays </h1> 
	<?php echo form_open('admin/gestionPays_c/ajouterPays'); ?>
		<form>
				<label class="formulaire"> Nom du pays </label> 
				<input class="inputformulaire" type='text' value='' name='description' value="<?php echo set_value('description'); ?>">	
				<br /><br />
			 	<input class="bouton" type='submit' value='Ajouter' name='ajoutPays' >  
		
		</form>
</div>