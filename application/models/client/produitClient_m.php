<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProduitClient_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$requete = 'SELECT codeProduit,nomCategorie,p.designation,description,prix,t.designation AS typeprix,disponible'
		.' FROM PRODUITS p,CATEGORIE c,ORIGINE o,TYPEPRIX t '
		.' WHERE c.idCategorie = p.idCategorie AND o.idOrigine = p.idOrigine AND t.idTypePrix=p.idTypePrix';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$donnees[] = $row;
				
			}
			return $donnees;
		}
		
	
	}
	
	function get_allCommandes()
	{
		$requete = 'SELECT c.idCommande,dateCommande,idSemaine,prixTotal,nomLieu from commandes c,lieu l,quicommande q where c.idLieu = l.idLieu and q.idUser='.$this->produitClient_m->getIdUser().' and c.idCommande=q.idCommande';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$donnees[] = $row;
				
			}
			return $donnees;
		}
		
	
	}
		
	function getIdUser(){
		$requete = 'SELECT idUser from utilisateur where nom="'.$this->session->userdata('nom').'"';
		
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
			return $donnees['idUser'];
		}
	}
	
		
	function insertProduitsCommande($donnees,$donnees2){
		
		$requete = 'insert into commandes values(null,NOW(),'.$donnees['idSemaine'].',"'.$donnees['prixtotal'].'",'.$donnees['idLieu'].')';
		$this->db->query($requete);
		$id = $this->db->insert_id();
		
		$idUser = $this->produitClient_m->getIdUser();
		$requete = 'insert into QUICOMMANDE values('.$idUser.','.$id.')';	
		$this->db->query($requete);
		
		foreach($donnees2 as $produit):
		
		$idTypePrix = $this->produitClient_m->getIdTypePrix($produit['typeprix']);
		$nomProduit = $this->produitClient_m->getIdProduit($produit['name']);
		
		$requete = 'insert into produitscommandes values('.$nomProduit.','.$id.','.$produit['qty'].','.$produit['price'].','.$idTypePrix.')';
		$this->db->query($requete);

		endforeach;
	}
	
	function getIdTypePrix($typeprix){
		$requete = 'SELECT idTypePrix from typeprix where designation="'.$typeprix.'"';
		
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
			return $donnees['idTypePrix'];
		}
	}
	
	function getIdProduit($nomProduit){
		$requete = 'SELECT idProduit from produits where designation="'.$nomProduit.'"';
		
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
			return $donnees['idProduit'];
		}
	}
}

?>
