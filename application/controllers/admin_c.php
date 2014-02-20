<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('application_m');
      
    }
    public function index()
    {
        if($this->session->userdata('idDroit')!=2){
            redirect('appli_c');
        }
        $donnees['titre']="Gestion des clients";
		$this->load->view('entete',$donnees);
        $this->load->view('admin/admin_index',$donnees);
		$this->load->view('pied',$donnees);
    }
	
}