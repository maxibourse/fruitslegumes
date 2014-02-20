<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class GestionProduit_c extends CI_Controller {

	public function index() {
		$donnees = array('titre' => 'vue des produits', 'contenu' => 'admin/gestionProduit_v');
		//$donnees['titre']="vu des produits";

		$donnees['mesproduits'] = $this -> gestionProduit_m -> get_all();
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/gestionProduit_v', $donnees);
		$this -> load -> view('pied', $donnees);

	}
	

	public function nouveau_produit() {

		$donnees = array('titre' => 'Ajouter un produit'
		//'contenu'=>'produit/produit_creer_produit'
		);
	    $donnees['typePrix'] = $this -> gestionProduit_m -> recup_typePrix();
	    $donnees['origine'] = $this -> gestionProduit_m -> recup_origine();	
		$donnees['categorie'] = $this -> gestionProduit_m -> recup_categorie();	
		
	    $this -> load -> view('entete', $donnees);
		$this -> load -> view('admin/nouveau_produit_v',$donnees);
		$this -> load -> view('pied', $donnees);
		
	}

public function ajouterProduit(){
	
	$this->form_validation->set_rules('designation','Designation','trim|required');
	$this->form_validation->set_rules('commentaire','Commentaire','trim|required');
	$this->form_validation->set_rules('prix','Prix','trim|required');
	$this->form_validation->set_rules('codeProduit','Code Produit','trim|required');
	$this->form_validation->set_rules('idTypePrix','Type Produit','trim|required');
	$this->form_validation->set_rules('idOrigine','Origine','trim|required');
	$this->form_validation->set_rules('disponible','Disponible','trim|required');
	$this->form_validation->set_rules('idCategorie','Categorie','trim|required');
	
	 if($this->form_validation->run()){
                    $donnees= array(
                        'designation'=>$this->input->post('designation'),
                        'commentaire'=>$this->input->post('commentaire'),
                        'prix'=>$this->input->post('prix'), 
                        'idTypePrix'=>$this->input->post('idTypePrix'),
                        'codeProduit'=>$this->input->post('codeProduit'),
                        'idOrigine'=>$this->input->post('idOrigine'),
                        'disponible'=>$this->input->post('disponible'),
                        'idCategorie'=>$this->input->post('idCategorie')                   
                    );
                    $this->gestionProduit_m->ajouterProduit($donnees);
                    redirect(base_url());

        }
		$this->load->view('entete',$donnees);
		$this->load->view('admin/gestionProduit_c',$donnees);
		$this->load->view('pied',$donnees);	

	
	}

}
?>
