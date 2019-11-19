<?php
    class Personnes{    
        protected $nom;
        protected $prenom;
        protected $email;
        protected $password;
        public function __construct($nom, $prenom, $email, $password){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>