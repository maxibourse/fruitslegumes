<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produit_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$q=$this->db->select('*')->from('produits')->order_by('designation', 'desc')->get();
		
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
		$q=$this->db->select('designation')->from('typePrix')->order_by('designation', 'desc')->get();
		
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
