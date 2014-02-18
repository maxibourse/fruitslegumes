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

}

?>
