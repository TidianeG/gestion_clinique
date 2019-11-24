<?php
    //require_once('Personnes.php');
    class Eleves extends Personnes{
        protected $niveau;
        protected $notes;
        public function __construct($nom,$prenom,$email,$password,$niveau){
            parent :: __construct($nom, $prenom, $email, $password);
            $this->niveau=$niveau;
        }
        public function setNotes($tabNote){
            if(is_array($tabNote)){
                $this->notes=$tabNote;
            }
            else{
                $this->notes =[];
            }
            
        }
        public function getNiveau(){
            return $niveau;
        }
        public function getNotes(){
            return $notes;
               // return $this->notes;
        }
        public function moyenne(){
            $moyenne=array_sum($this->notes)/count($this->notes);
            return $moyenne;

        }
    }
?>