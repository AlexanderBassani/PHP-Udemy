<div class="titulo">Desafio Equação PHP</div>

<?php 

$numeradorA = (6 * (3 + 2)) ** 2;
$numeradorB = (1 - 5) * (2 - 7) ;

$denominadorA = 3 * 2;
$denominadorB = 2;
$denominadorC = 10**3;

$contaA = $numeradorA / $denominadorA;
$contaB = ($numeradorB / $denominadorB)**2;
$contaC = ($contaA - $contaB)**3;
$contaD = $contaC / $denominadorC;

echo "O resultado final é " . $contaD . ".";
