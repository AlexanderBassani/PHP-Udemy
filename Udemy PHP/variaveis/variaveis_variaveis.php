<div class="titulo">Variáveis Variáveis PHP</div>

<?php 
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo "<br>";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa {$$epa} {$$$epa}";
