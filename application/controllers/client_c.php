<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('application_m');
        //$this->user = ($this->sitemodel->is_logged()) ? $this->sitemodel->get_user($this->session->userdata('lastname')) : false;
    }
    public function index()
    {
        if($this->session->userdata('droit')!=1){
            redirect('appli_c');
        }
        $donnees['titre']="Membre de l'association";
		$this->load->view('entete',$donnees);
        $this->load->view('clients/client_index',$donnees);
		$this->load->view('pied',$donnees);
    }
}