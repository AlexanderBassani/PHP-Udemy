<div class="titulo">Recursividade</div>

<?php

function somaUmAte($num){
    $resultado = 0;
    for($i = 1; $i <= $num; $i++){
        $resultado += $i;
    }
    echo $resultado . '<br>';
}

somaUmAte(10);

function somaResursivaUmAte($num){
    //condição de parada
    if($num == 1) return 1;

    return $num + somaResursivaUmAte($num - 1);
}

echo somaResursivaUmAte(10) . '<br>';

function somaResursivaEconomica($num){
    return $num === 1 ? 1 : $num + somaResursivaEconomica($num - 1);
}

echo somaResursivaEconomica(10);