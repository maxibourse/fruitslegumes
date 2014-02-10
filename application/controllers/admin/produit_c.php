<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Produit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des produits', 'contenu' => 'admin/produit_v');
		//$donnees['titre']="vu des produits";

		$donnees['mesproduits'] = $this -> produit_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/produit_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}

	public function creer_produit() {

		$donnees = array('titre' => 'Ajouter un produit'
		//'contenu'=>'produit/produit_creer_produit'
		);
	    $donnees['mesproduits'] = $this -> produit_m -> recup_typePrix();
		$this -> load -> view('admin/nouveau_produit_v', $donnees);
		$this -> load -> view('entete', $donnees);
<<<<<<< HEAD
=======
		echo "<h1>" . "Ajouter un nouveau produit" . "</h1>" . "<label>Nom du produit </label>" . "<input type='text' value=''>" . "<br>" . "<input type='text' value=''>";
>>>>>>> 6c0a627aa271dea9a1512113002c39a4666c2a59
		$this -> load -> view('pied', $donnees);
	}

}
?>
