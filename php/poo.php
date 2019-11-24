<?php
    require_once(Eleves.php);
    require_once(Profs.php);
    $eleve=new Eleves("gaye", "cheikh", "gaye95cheikh@gmail.com","**********", "licence");
    echo $eleve->getNom();
    echo $eleve->getPrenom();
    echo $eleve->getEmail();
    echo $eleve->getPassword();
    echo $eleve->getNiveau();
    $note=["linux"=>17];
    $eleve->enregistreNotes($note);
    echo $eleve->getNotes();
?>