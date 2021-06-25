<div class="titulo">Operadores Lógicos PHP</div>

<?php
echo '<p class="divisao">V ou F</p><hr>';
var_dump(true);
echo '<br>';
var_dump(!true);


echo '<p class="divisao">Tabela Verdade "AND" (E)</p><hr>';
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo '<br>';

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo '<p class="divisao">Tabela Verdade "OR" (OU)</p><hr>';
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo '<br>';

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo '<p class="divisao">Tabela Verdade "XOR" (OU exclusivo)</p><hr>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo '<br>';

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<p class="divisao">Tabela Verdade "XOR" (OU exclusivo)</p><hr>';
$idade = 62;
$sexo = 'F';

$pagouPrevidencia = true;

$criterioHomen = ($idade >= 65 && $sexo === "M");
$criterioMulher = ($idade >= 60 && $sexo === "F");
$atingiuCriterio = $criterioHomen || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo"Pode se aposentar -> $podeSeAposentar <br>";

if($idade >= 60 && $sexo === "F") {
    echo "Pode se aposentar -> $sexo";
}elseif($idade >= 65 && $sexo === "M") {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Não pode se aposentar';
}


?>