<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Shop_c extends CI_Controller {

	public function add(){
			
		$donnees = array(
			'id'=>$this->input->post('id'),
			'qty'=>$this->input->post('quantite'),
			'price'=>$this->input->post('prix'),
			'name'=>$this->input->post('designation'),
			'typeprix'=>$this->input->post('typeprix')
		);
		
		$this->cart->insert($donnees);
		redirect('client/produit_c');
		
	}
	
	public function panier(){
		$donnees['content'] = 'shop/panier';
		$donnees['titre'] = 'Panier';
		$this -> load -> view('entete', $donnees);
		$this -> load -> view('shop/panier', $donnees);
		$this -> load -> view('pied', $donnees);
	}
	
	public function update(){
		$donnees = array(
			'rowid'=>$this->input->post('colone'),
			'qty'=>$this->input->post('quantite'),
		);
		
		$this->cart->update($donnees);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function delete(){
		$donnees = array(
			'rowid'=>$this->uri->segment(4),
			'qty'=>0
		);
		
		$this->cart->update($donnees);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function deleteAll(){
		$this->cart->destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function commande(){
		$donnees = array(
			'idSemaine'=>1,
			'prixtotal'=>$this->input->post('prixtotal'),
			'idLieu'=>1
		);
		
		$donnees2 = $this->cart->contents();
		$this->produitClient_m->insertProduitsCommande($donnees,$donnees2);
		
		$this->cart->destroy();
		redirect('client_c',$data);
	}

}
?>
