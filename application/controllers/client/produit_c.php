<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Produit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'Gestionnaire de commande', 'contenu' => 'client/produit_v');

		$donnees['mesproduits'] = $this -> produit_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('clients/produit_v', $donnees);
		$this -> load -> view('pied', $donnees);
	}

}
?>