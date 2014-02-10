<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vue des produits</title>
</head>
<body>
	<?php foreach($mesproduits as $r): ?>
	<h1> Ajouter un nouveau produit </h1> 
		<form>
				<label> Nom du produit </label> <input type='text' value='' name='produit'> <br> 
				<label>Commentaire </label> <textarea rows='5' cols='50'> </textarea> <br> 
				<label>Prix </label> <input type='text' value='' name='prix'> <br> 
				<label>Code produit </label> <input type='text' value='' name='codeProduit'> <br> <br> 
				<label> Type prix </label> <select name='typePrix'><option><?=$r -> designation ?></option>
																   <option><?=$r -> designation ?></option></select><br><br> 
				<label> Origine </label> <select name='origine'></select> <br> <br> 
				<label> Disponible </label> <select name='dispo'></select> <br> <br> 
				<label> Catégorie </label>	<select name='categorie'></select> <br> <br> 
			 	<input type='submit' value='Ajouter' name='ajoutProduit'>  
		</form>
	<?php endforeach; ?>
</body>
</html>