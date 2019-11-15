<?php
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST["email"];
       $genre=$_POST["genre"]==0?Madame:Monsieur;
        if($nom!="" && $prenom!="" && $email!="" && isset($_POST["genre"])){
            echo "Bonjour $genre  $nom <br>Vos donnees $email et $prenom ont etes bien enregistrees";
        }      
?>