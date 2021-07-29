<div class="titulo">Operadores Ternário PHP</div>

<?php
$idade = 70;
$status;

if($idade >=18){
    $status = 'Maior de idade';
}else{
    $status = 'Menor de idade';
}
echo "$status <br>";

$idade = 17;
$status = $idade >= 18 ? 'Marior de idade' : 'Menor de idade';
echo "$status <br>";

$idade = 70;
$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Menor de idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';
echo "$status <br>";