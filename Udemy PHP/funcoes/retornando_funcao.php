<div class="titulo">Retornando Função</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(10)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(3);
echo '<br>', $doisMais(10);