<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    // "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dados2['endereço'] = 'Rua A';

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo "<br>" . is_array($dadosCompletos);
echo "<br>" . count($dadosCompletos);
echo "<br>";

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo "<br>" . "{$dadosCompletos['idade']}";
echo "<br>" . "${dadosCompletos['idade']}";


unset($dadosCompletos["nome"]);
echo "<br>";
print_r($dadosCompletos);

unset($dadosCompletos);
echo "<br>";
var_dump($dadosCompletos);


$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares;
echo "<br>";
var_dump($decimais);

$decimais = array_merge($pares, $impares);
echo "<br>";
var_dump($decimais);

sort($decimais);
echo "<br>";
print_r($decimais);