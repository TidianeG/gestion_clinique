<?php
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST["email"];
       if(($_POST['genre']==0)){
           $genre="Madamme";
       }
       else{
        $genre="Monsieur";
       }
        if($nom!="" and $prenom!="" and $email!="" and isset($_POST["genre"])){
            echo "Bonjour $genre $prenom $nom <br>Adresse mail $email <br> Vos donnees ont etes bien enregistrees";
        }
       
?>