<?php

// laço de repetição for


for( $i=1  ; $i<=10 ; $i++ ){
//  inicial  compara  saida
    
    if ($i == 5 || $i == 8){
        //break; // interrompe o laço
        // $i = 100;
        continue; // volta para o início do for
        echo "<br>TESTE = " . $i;
    }else{
        echo "<br>i = " . $i;
    }
}



?>
