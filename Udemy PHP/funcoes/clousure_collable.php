<div class="titulo">Clousure e Collable</div>

<?php
$soma1 = function($a,$b) {
    return $a + $b;
};

function soma2($a,$b) {
    return $a + $b;
};

echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';

// $soma1 = 1;
// echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';

echo soma2(2,3) . ' ';
echo (is_callable(soma2) ? 'sim' : 'não') . '<br>';

function executar1($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a,$b) ?? 'nada';
    echo "$a $op $b = $resultado <br>";
}

executar1(2,3,'+',$soma1);
executar1(3,4,'+', soma2);

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a,$b) ?? 'nada';
    echo "$a $op $b = $resultado <br>";
}

executar2(4,5,'+',$soma1);
executar2(5,6,'+', soma2);
