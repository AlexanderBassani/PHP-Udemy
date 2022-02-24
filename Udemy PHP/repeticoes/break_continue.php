<div class="titulo">Break e Continue</div>

<?php

$count = 10;

for(;;){
    echo "$count  ";
    $count++;
    if($count > 20){
        break;
    }
}

echo '<br>';

for(;;){
    
    $count++;
    if($count % 2 === 1){
        continue;
    }
    echo "$count  ";
    if($count >= 30){
        break;
    }
}

echo '<br>';

foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor ";
}