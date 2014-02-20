<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Produit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'Gestionnaire de commande', 'contenu' => 'client/produit_v');

		if($this->client_m->getDroit($this->session->userdata('nom'))==0){
			$donnees['droitCommande'] = 0;
		}
		else{
			$donnees['droitCommande'] = 1;
			$donnees['mesproduits'] = $this -> produitClient_m -> get_all();
		}
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('clients/produit_v', $donnees);
		$this -> load -> view('pied', $donnees);
	}

}
?>
