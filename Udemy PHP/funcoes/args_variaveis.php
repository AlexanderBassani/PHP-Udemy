<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(14, 15, 16, 17, 18) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(14, 15) . '<br>';
echo somaCompleta(14, 15, 16, 17, 18) . '<br>';

$array = [6, 7, 8];

// echo '<br>' . somaCompleta($array);
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    foreach($dependentes as $dep){
        echo "Dependente: $dep <br>";
    }
}

echo "<br>";
membros("Ana Silva", "Pedro", "Rafaela", "Amanada");
membros("Roberto", "Junior");