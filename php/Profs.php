<?php
    //require_once('Personnes.php');
    class Profs extends Personnes{
        protected $class;
        protected $profil;
        protected $salaire;

        public function __construct($nom, $prenom, $email, $password, $class, $profil){
            parent :: __construct($nom, $prenom, $email, $password);
            $this->class=$class;
            $this->profil=$profil;
        }
        public function setSalaire(){
            if($this->profil==="stagiaire"){
                $this->salaire = 150000;
            }
            else if($profil==="vacataire"){
                $this->salaire = 200000;
            }
            else if($profil==="titulaire"){
                $this->salaire = 400000;
            }
        }
        public function getSalaire(){
            return $this->salaire;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getClass(){
            return $this->class;
        }
        public function getProfil(){
            return $this->profil;
        }
    }
?>