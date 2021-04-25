<div class="titulo">Dasafio Equação PHP</div>

<?php

$title = 'Atribuições';
$numero = 10;

echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
--$numero;
echo '<br>' . $numero;
$numero++;
++$numero;
echo '<br>' . $numero;
$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 5;
echo '<br>' . $numero;
$numero /= 5;
echo '<br>' . $numero;
$numero %= 5;
echo '<br>' . $numero;
$numero **= 5;
echo '<br>' . $numero;
$numero .= 5; //apenas concatenação
echo '<br>' . $numero;

$texto = 'esse é um tesxto padrão';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade';
echo '<br>' . $texto;

$variavelInexistente = 'varlor existente'
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'
echo '<br>' . $variavelInexistente;