<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GestionProduit_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$requete = 'select * from produits, origine';
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
	
	function recup_typePrix()
	{
		$q=$this->db->select('idTypePrix, designation')->from('typePrix')->order_by('idTypePrix', 'asc')->get();
				
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$typePrix[] = $row;
			}
			
			return $typePrix;
		}
	}
		
	function recup_origine()
	{
		
		$requete = 'select description from produits p, origine o where "'.$donnees['idOrigine'].'" = o.idOrigine AND p.idProduit = "'.$donnees['idProduit'].'"';
		//$q=$this->db->select('idOrigine, description')->from('origine')->order_by('idOrigine', 'asc')->get();
		$q=$this->db->query(requete);
	
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$origine[] = $row;
			}
			
			return $origine;
		}
	}
	
	
	function recup_categorie()
	{
		
		$q=$this->db->select('idCategorie, nomCategorie')->from('categorie')->order_by('idCategorie', 'asc')->get();
		
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$categorie[] = $row;
			}
			
			return $categorie;
		}
	}
	
	function ajouterProduit($donnees){
		$sql = "INSERT produits VALUES(NULL, \"".$donnees['designation']."\",\"".$donnees['commentaire']."\",
        \"".$donnees['prix']."\", \"".$donnees['idTypePrix']."\", \"".$donnees['codeProduit']."\",
	    \"".$donnees['idOrigine']."\", \"".$donnees['disponible']."\", \"".$donnees['idCategorie']."\") ;";
		$this->db->query($sql);
	}

}
?>
