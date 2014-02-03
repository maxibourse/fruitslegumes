<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application_m extends CI_Model {
    public function add_user($donnees)
    {
        $sql = "INSERT utilisateur VALUES (NULL,\"".$donnees['nom']."\",\"".$donnees['mdp']."\",
        \"".$donnees['email']."\",1) ;";
        $this->db->query($sql);
    }

    public function verif_connexion($donnees,&$donnees_resultat)
    {
        $sql = "SELECT idDroit,nom,email from utilisateur WHERE nom=\"".$donnees['nom']."\"
        and mdp=\"".$donnees['mdp']."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()==1)
        {
            $row=$query->result_array();
            $donnees_resultat=$row[0];
            return true;
        }
        else
            return false;
    }

    function EST_connecter()
    {
         return $this->session->userdata('nom') &&  $this->session->userdata('idDroit') ;
    }

    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect();exit;
    }
    public function test_email($email)
    {
        $sql = "SELECT email from utilisateur WHERE email=\"".$email."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }
    public function test_login($nom)
    {
        $sql = "SELECT nom from utilisateur WHERE nom=\"".$nom."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }
}