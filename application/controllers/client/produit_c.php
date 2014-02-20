<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Produit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'Gestionnaire de commande', 'contenu' => 'client/produit_v');

		$donnees['mesproduits'] = $this -> produitClient_m -> get_all();
	}

}
?>
