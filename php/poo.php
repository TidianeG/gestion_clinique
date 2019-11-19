<?php
    class Vehicule{
        private $genre;
        private $nmbreRoue;
        private $matricule;
        private $boite_vitesse;
        public function __construct($genre, $nmbreRoue, $matricule, $boite_vitesse){
            $this->genre = $genre;
            $this->nmbreRoue = $nmbreRoue;
            $this->matricule = $matricule;
            $this->boite_vitesse = $boite_vitesse;
        }
    }

    class Automobile extends Vehicule{
        
    }

?>