<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class appli_c extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('application_m');
	}
	
	public function index()
	{
		$donnees['titre']="Connexion";
		if( $this->session->userdata('idDroit')==2){
		    redirect('admin_c');
        }
        if( $this->session->userdata('idDroit')==1){
            redirect('client_c');
        }
		$this->load->view('entete',$donnees);
		$this->load->view('appli_index',$donnees);
		$this->load->view('pied',$donnees);
	}
	
	public function inscription(){
		$this->form_validation->set_rules('nom','Nom','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('mdp','Mot de passe','trim|required|matches[pass2]');
        $this->form_validation->set_rules('pass2','Mot de passe','trim|required');
                /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            if(! $this->application_m->test_email($this->input->post('email'))){
                if(! $this->application_m->test_login($this->input->post('nom'))){
                    $donnees= array(
                        'nom'=>$this->input->post('nom'),
                        'email'=>$this->input->post('email'),
                        'mdp'=>$this->input->post('mdp'), //$this->encrypt->encode(  ; md5(
                        'idDroit'=>1
                    );
                    $this->application_m->add_user($donnees);
                    // fin d'ajout et redirection
                    redirect(base_url());
                }
                else{
                    $donnees['erreur']="Ce login existe déjà";
                }
            }
            else{
                 $donnees['erreur']="Cet email existe déjà";
            }

        }
        $donnees['titre']="inscription";
		$this->load->view('entete',$donnees);
		$this->load->view('appli_inscription',$donnees);
		$this->load->view('pied',$donnees);		
	}

 	public function aff_connexion()
    {
        if ($this->application_m->EST_connecter()){
            redirect('appli_c/aff_deconnexion');
        }
        $this->form_validation->set_rules('nom','nom','trim|required');
        $this->form_validation->set_rules('mdp','Mot de passe','trim|required');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            $donnees= array(
                'nom'=>$this->input->post('nom'),
                'mdp'=>$this->input->post('mdp')
            );
            $donnees_session=array();
            if($this->application_m->verif_connexion($donnees,$donnees_session))
            {
                $this->session->set_userdata($donnees_session);
                redirect('appli_c/aff_connexion');
            }
            else{
                $donnees['erreur']="Mot de passe ou login incorrect";
                $donnees['titre']="connexion";
            }
        }
        $donnees['titre']="connexion";
        // fin d'ajout et redirection
		$this->load->view('entete',$donnees);
        $this->load->view('appli_index',$donnees);
		$this->load->view('pied',$donnees);		
    }

    public function aff_deconnexion(){
        if( $this->session->userdata('idDroit')==2){
            redirect('admin_c');
        }
        if( $this->session->userdata('idDroit')==1){
            redirect('client_c');
        }
        $donnees['titre']="deconnexion";
		$this->load->view('entete',$donnees);
        $this->load->view('appli_index',$donnees);
   		$this->load->view('pied',$donnees);
    }
	
    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('appli_c');exit;
    }
    public function mdp_oublie()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            if($this->application_m->test_email($this->input->post('email'))){
                {
                    $donnees= array(
                        'email'=>$this->input->post('email')
                    );
                    $this->email->from('noreply@monsite.com','Mon site');
                    $this->email->to($this->input->post('email'),'Mot de passe oublié');
                    $this->email->subject('Votre mot de passe');
                    $this->email->message('<p>Voici un nouveau de passe </p>....');
                    $this->email->send();
                   // $this->application_m->envoie_email($donnees);
                    // fin d'ajout et redirection
                    redirect(base_url());
                }
            }
            else{
                $donnees['erreur']="Cet email n'existe pas";
            }

        }
        $donnees['titre']="mot de passe oublié";
        $this->load->view('application_mdp_oublie',$donnees);
    }
}

?>