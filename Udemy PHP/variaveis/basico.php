<div class="titulo">Variaveis PHP</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);
unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel; 
$variavel = 'agora sou uma string';
echo '<br>' . $variavel; 

//Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';
//$6var = 'invalida';
//$%var7 = 'invalida';
//$vâr8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);

