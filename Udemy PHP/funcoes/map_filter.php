<div class="titulo">Map e Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota){
    $notasFinais[] = round($nota);
}

print_r($notasFinais);
echo '<br>';

$notasFinais = array_map(round, $notas);
print_r($notasFinais);


$apenasAprovados = [];
foreach($notas as $nota){
    if($nota >= 7){
        $apenasAprovados[] = $nota;
    }
}

echo '<br>';
print_r($apenasAprovados);

function aprovados($nota){
    return $nota >= 7;
}

echo '<br>';
$apenasAprovados = array_filter($notas, aprovados);
print_r($apenasAprovados);


function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais = array_map(calculoLegal, $notas);
print_r($notasFinais);