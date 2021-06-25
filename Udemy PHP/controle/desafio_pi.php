<div class="titulo">If Else PHP</div>

<?php
echo pi();
$pi = 3.14;

if($pi === pi()){
    echo "<br> Iguais!";
}else{
    echo "<br> Diferentes!";
}

//Operador Relacional
echo '<br>' + ($pi - pi());

if($pi - pi() <= 0.01){
    echo "<br> Praticamente Iguais!";
}else{
    echo "<br> Diferentes!";
}