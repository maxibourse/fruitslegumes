<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class client_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getDroit()
	{
		$requete = 'SELECT droitCommande from utilisateur where nom="'.$this->session->userdata('nom').'"';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
		}
		return $donnees;
	}
	
	function get_email_vendeur()
	{
		$requete = 'SELECT email from utilisateur where idDroit=1';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
		}
		return $donnees['email'];
	}

	function get_email_client()
	{
		$requete = 'SELECT email from utilisateur where nom="'.$this->session->userdata('nom').'"';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
		}
		return $donnees['email'];
	}
	
	function get_mdp_client($donnees)
	{
		$requete = 'SELECT mdp from utilisateur where email="'.$donnees.'"';
				
		$q=$this->db->query($requete);
		
		if($q->num_rows()>0)
		{	
			foreach($q->result_array() as $row)
			{
				$donnees = $row;
				
			}
		}
		return $donnees['mdp'];
	}

}

?>
