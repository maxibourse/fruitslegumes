<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GestionClient_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$q=$this->db->select('*')->from('utilisateur')->order_by('nom', 'desc')->get();
		
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