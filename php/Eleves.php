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
            return $nom;
        }
        public function getPrenom(){
            return $prenom;
        }
        public function getEmail(){
            return $email;
        }
        public function getPassword(){
            return $password;
        }
        public function getNiveau(){
            return $niveau;
        }
        public function getNotes(){
            return $notes;
        }
    }
?>