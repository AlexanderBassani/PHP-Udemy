<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>';
var_dump($lista);
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];

echo '<br>' . $texto = 'Esse é um texto teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[10];
echo '<br>' . $texto[11];//cuidado
echo '<br>' . mb_substr($texto, 10, 1);
echo '<br>' . mb_substr($texto, 10, 2);
echo '<br>' . mb_substr($texto, 10, 3);
echo '<br>' . mb_substr($texto, 10, 4);
echo '<br>' . mb_substr($texto, 10, 5);

