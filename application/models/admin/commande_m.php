<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commande_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$q=$this->db->select('*')->from('commandes')->order_by('dateCommande', 'desc')->get();
		
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