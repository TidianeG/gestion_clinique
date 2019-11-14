<?php
    $temperatures = '34, 20, 22, 24, 31, 24, 33, 25, 22, 24, 30, 23, 29, 32, 33, 24, 22, 33, 32, 25, 34, 22, 22, 25 , 24, 24, 33, 35, 19, 23';
    $tab_temp=explode(", ", $temperatures);
    $total=0;
    $tab_vide=[];
    foreach($tab_temp as $value){
        $total+=$value;
    }
    $temp_moyenne= $total / count($tab_temp);
    echo $temp_moyenne;

    sort($tab_temp);
    
    for($i=0;$i<5;$i++){
        foreach($tab_temp as $key=>$value){
            $k=0;
            for($j=0;$j<=$key;$j++){
                if($tab_vide[$j]=$value){
                    $k++;
                }
                if($k<=0){
                    $tab_vide[$i]=$value;
                } 
            }
        }
    }

        foreach($tab_vide as $key=>$valeur){
            echo $valeur;
        }

?>