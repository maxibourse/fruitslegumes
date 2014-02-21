<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class GestionLieux_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des lieux de provenances', 'contenu' => 'admin/gestionLieux_v');
		//$donnees['titre']="vu des produits";

		$donnees['meslieux'] = $this -> gestionLieux_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/gestionLieux_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}
	
	public function nouveau_lieu() {

		$donnees = array('titre' => 'Ajouter un lieu de retrait'
		);
	 		
	    $this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/nouveau_lieu_v',$donnees);
		$this -> load -> view('pied', $donnees);
		
	}
	
	public function ajouterLieu(){
	
	 $this->form_validation->set_rules('nomLieu','nomLieu','trim|required');
		
	 if($this->form_validation->run()){
                    $donnees= array(
                        'nomLieu'=>$this->input->post('nomLieu')              
                    );
                    $this->gestionLieux_m->ajouterLieu($donnees);
                    redirect(base_url('index.php/admin/gestionLieux_c'));

        }
		$this->load->view('entete',$donnees);
		$this->load->view('admin/gestionLieux_c',$donnees);
		$this->load->view('pied',$donnees);	

	
	}
}
?>