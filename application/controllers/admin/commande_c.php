<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Commande_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des commandes', 'contenu' => 'admin/commande_v');
		//$donnees['titre']="vu des produits";

		$donnees['mescommandes'] = $this -> commande_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/commande_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}
}
?>
