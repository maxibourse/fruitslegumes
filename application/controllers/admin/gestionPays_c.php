<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class GestionPays_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des pays expéditeurs', 'contenu' => 'admin/gestionPays_v');
		//$donnees['titre']="vu des produits";

		$donnees['mespays'] = $this -> gestionPays_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/gestionPays_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}
	public function nouveau_pays() {

		$donnees = array('titre' => 'Ajouter un pays'
		);
	 		
	    $this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/nouveau_pays_v',$donnees);
		$this -> load -> view('pied', $donnees);
		
	}
	
	public function ajouterPays(){
	
	$this->form_validation->set_rules('description','Description','trim|required');
		
	 if($this->form_validation->run()){
                    $donnees= array(
                        'description'=>$this->input->post('description')              
                    );
                    $this->gestionPays_m->ajouterPays($donnees);
                    redirect(base_url('index.php/admin/gestionPays_c'));

        }
		$this->load->view('entete',$donnees);
		$this->load->view('admin/gestionPays_c',$donnees);
		$this->load->view('pied',$donnees);	

	
	}
}
?>