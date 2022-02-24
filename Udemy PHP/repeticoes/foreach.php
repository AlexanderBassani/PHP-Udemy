<div class="titulo">Laço Foreach</div>

<?php
$array = array(
    1 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado",
);

foreach($array as $valor){
    echo "$valor ";
}

echo "<br>";

foreach($array as $indice => $valor){
    echo "$indice => $valor; ";
}

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach($matrix as $linhas){
    // echo "$linhas <br>";
    foreach($linhas as $valor){
        echo "$valor ";
    }
    echo "<br>";
};

$numeros =[ 1, 2, 3, 4, 5];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar ";
}
echo "<br>";
print_r($numeros);