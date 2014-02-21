<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Produit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'Gestionnaire de commande', 'contenu' => 'client/produit_v');
		$donnees['mesproduits'] = $this -> produitClient_m -> get_all();
		
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('clients/produit_v', $donnees);
		$this -> load -> view('pied', $donnees);
	}
	
	public function demandeDroit() {
		$donnees = array('titre' => 'Demande de droit', 'contenu' => 'client/produit_v');
		
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('clients/demande_v', $donnees);
		$this -> load -> view('pied', $donnees);
	}
	
	public function envoiMail(){
			
		$this->form_validation->set_rules('raison','Raison','trim|required');

		if($this->form_validation->run()){
			 $this->email->from($this->client_m->get_email_vendeur());
             $this->email->to($this->client_m->get_email_client($this->session-> userdata('nom')));
             $this->email->subject('Demande de droits');
             $this->email->message($this->input->post('raison'));
             $this->email->send();
			 $donnees['message']="Demande envoyée";
		}
		$donnees['titre']="Demande de droit";
		$this->load->view('entete',$donnees);
		$this->load->view('clients/demande_v',$donnees);
		$this->load->view('pied',$donnees);	


	}
	
	public function getDetail(){
		$donnees = $this->input->post('idCommande');
		$detail['details'] = $this->application_m->getDetailCommande($donnees);
		
		$donnees = array('titre' => 'Détails commande', 'contenu' => 'client/produit_v');
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('clients/client_detail', $detail);
		$this -> load -> view('pied', $donnees);
	}

}
?>
