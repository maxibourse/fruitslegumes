<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class GestionClient_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des clients', 'contenu' => 'admin/gestionClient_v');

		$donnees['mesclients'] = $this -> gestionClient_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/gestionClient_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}
}
?>
