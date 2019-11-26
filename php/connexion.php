<?php
    class Php_Base{
        protected $bdd;
        protected $req;
        public function __construct(){
            $this->connection();
        } 
        public function connection(){
            try{ 
                $bdd = new PDO("mysql:host=localhost;dbname=clinique_generale;charset=utf8", "gaye95cheikh", "27ndawGAYE", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
                echo "connection etablie!!!!!!!!!!!";
            }
            catch (Exception $e) {
                die('Erreur fatale : ' . $e->getMessage());
            }
        }
        public function executionRequete($requete){
                $this->req = $bdd->query($requete);
        } 
        public function afficher(){
            try{ 
                while($data = $this->Sreq->fetch()){
                    echo $data['nom']." ".$data['prenom'];
                }
            }
            catch (Exception $e) {
                die('Erreur fatale : ' . $e->getMessage());
            }
        }
        public function addUser($nom, $prenom, $email, $pass, $date){

        }     
    }
    $phpbase=new Php_Base();
    //$phpbase->executionRequete("SELECT * FROM users");
    //$phpbase->afficher();
?>