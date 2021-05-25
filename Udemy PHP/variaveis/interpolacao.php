<div class="titulo">Interpolação PHP</div>

<?php

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";
echo "<br> $numero + 1";
// echo "<br> {$numero + 1}"; //gera erro

$texto = "Sua nota é: $numero";
echo"<br> $texto";

$objeto = "caneta";
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s";

