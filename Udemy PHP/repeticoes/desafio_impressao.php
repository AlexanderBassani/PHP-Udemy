<div class="titulo">Desafio impressão</div>
<!-- 
    Enunciado:
    - Imprima apenas os valores do array que contén indice par
    - Resolver com for e foreach
    - Valores esperados: AAA,CCC,EEE
 -->
<?php

$array =[
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach($array as $indice => $valor){
    if($indice % 2 === 0){
        echo "$valor ";
    }
}

echo "<br>";

for($i = 0; $i <= count($array); $i++){
    if($i % 2 === 0){
        echo "$array[$i] ";
    }
}