<?php
    function factoriel($nombre){
        $i=$nombre;
        $valeur=1;
        while($i>1){
            $valeur=$valeur*($i);
            $i--;
        }
        return $valeur;
    }
    echo factoriel(12);

?>