<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('application_m');
    }
    public function index()
    {
        if($this->session->userdata('idDroit')!=1){
            redirect('appli_c');
        }
        $donnees['titre']="Membre de l'association";

		$resultat = $this->client_m->getDroit();
		$donnees['resultat'] = $resultat['droitCommande'];
		
		$this->load->view('entete',$donnees);
        $this->load->view('clients/client_index',$donnees);
		$this->load->view('pied',$donnees);
    }
}