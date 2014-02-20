<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class client_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getDroit($donnees)
	{
		$requete = 'SELECT droitCommande from utilisateur where nom="'.$donnees[nom].'"';
				
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
