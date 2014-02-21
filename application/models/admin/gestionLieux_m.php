<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GestionLieux_m extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$q=$this->db->select('*')->from('lieu')->order_by('nomLieu', 'desc')->get();
		
		if($q->num_rows()>0)
		{	
			foreach($q->result() as $row)
			{
				$donnees[] = $row;
			}
			
			return $donnees;
		}
	}

function ajouterLieu($donnees){
		$sql = "INSERT lieu VALUES(NULL, \"".$donnees['nomLieu']."\");";
		$this->db->query($sql);
	}
}
?>