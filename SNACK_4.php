<!-- 
Creare un array con 15 numeri casuali
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
 -->
<?php
    $num = [];
    while (count($num) = 15) {
        $nGenerated = rand(1,100);
        if (!in_array($nGenerated)) {
            array_push($num, $nGenerated);
        } else {
            
        }
    }
 ?>