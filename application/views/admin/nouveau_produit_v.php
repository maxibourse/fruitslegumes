<div id="container2">
	<title>Vue des produits</title>
	<link href="<?php echo base_url()?>dist/css/moncss.css" rel="stylesheet">

	<h1> Ajouter un nouveau produit </h1> 
	<?php echo form_open('admin/gestionProduit_c/ajouterProduit'); ?>
		<form>
				<label class="formulaire"> Nom du produit </label> 
				<input class="inputformulaire" type='text' value='' name='designation' value="<?php echo set_value('designation'); ?>">
				<?php echo form_error('designation','<span class="error">',"</span>");?> <br> <br />
				<label class="formulaire">Commentaire </label> 
				<textarea class="inputformulaire" rows='5' cols='50' name='commentaire' value="<?php echo set_value('commentaire'); ?>"> </textarea> <br><br /> 
				
				<label class="formulaire">Code produit </label> 
				<input class="inputformulaire" type='text' value='' name='codeProduit' value="<?php echo set_value('codeProduit'); ?>"> <br> <br> 
												
				<label class="formulaire">Prix </label> 
				<input class="inputformulaire" type='text' value='' name='prix' value="<?php echo set_value('prix'); ?>"> <br> <br />
				
				<label class="formulaire"> Type prix </label> 
				<select class="inputformulaire" name='idTypePrix'>
				<?php foreach($typePrix as $r1): ?>
					<option value="<?=$r1 -> idTypePrix ?>"><?=$r1 -> designation ?></option>
				<?php endforeach; ?></select><br><br> 
				
				<label class="formulaire"> Origine </label> 
				<select class="inputformulaire" name='idOrigine'>
				<?php foreach($origine as $r2): ?>
					<option value="<?=$r2 -> idOrigine ?>"><?=$r2 -> description ?></option>
				<?php endforeach; ?></select><br><br>	
				</select>
				
				<label class="formulaire"> Disponible </label> <select class="inputformulaire" name='disponible'>
					<option value="1"><?= 'Oui' ?></option>
					<option value="0"><?= 'Non' ?></option>
				</select> <br> <br> 
				
				<label class="formulaire"> Catégorie </label> 
				<select class="inputformulaire" name='idCategorie'>
				<?php foreach($categorie as $r3): ?>
					<option value="<?=$r3 -> idCategorie ?>"><?= $r3 -> nomCategorie ?></option>
				<?php endforeach; ?></select><br>	
				 
			 	<input class="bouton" type='submit' value='Ajouter' name='ajoutProduit' >  
		
		</form>
</div>