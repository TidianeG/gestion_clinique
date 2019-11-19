<?php
    require_once(Personnes.php);
    class Eleves extends Personnes{
        protected $niveau;
        protected $notes;

        public function __construct($nom, $prenom, $email, $password, $niveau){
            parent :: __construct($nom, $prenom, $email, $password);
            $this->niveau=$niveau;
        }
        public function enregistreNotes($notes){
            $this->notes = $notes;
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
        public function getNiveau(){
            return $this->niveau;
        }
        public function getNotes(){
            return ;
        }
    }
?>