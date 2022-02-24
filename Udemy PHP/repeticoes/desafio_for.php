<div class="titulo">Desafio For</div>
<!-- 
    Usar o for...
    #
    ##
    ###
    ####
    #####
    1) pode usar incremento $i++
    2) não pode usar incremento $i++
 -->

<?php

$impressao = '';

for($i = 0; $i < 5; $i++){
    $impressao .= '#';
    echo $impressao . "<br>";
}

for($impressao2 = '#'; $impressao2 != '######'; $impressao2.='#'){
    echo $impressao2 . "<br>";
}