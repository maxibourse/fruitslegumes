<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GestionPays_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$q=$this->db->select('*')->from('origine')->order_by('description', 'desc')->get();
		
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$donnees[] = $row;
			}
			
			return $donnees;
		}
	}
	
function ajouterPays($donnees){
		$sql = "INSERT origine VALUES(NULL, \"".$donnees['description']."\");";
		$this->db->query($sql);
	}
}
?>