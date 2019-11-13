<?php
   function factoriel($nombre){
       $i=$nombre;
       $valeur=1;
     while ($i>1){
         $valeur=$valeur*($i-1);
         $i--;
     }
     return  $valeur;
   }
   factoriel(12);
?>