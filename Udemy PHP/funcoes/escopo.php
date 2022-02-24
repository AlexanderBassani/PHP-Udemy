<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a próxima!<br>";

}

imprimirMensagens();

$variavel = 1;

function trocaValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function TrocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
TrocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(TrocaValorDeVerdade());
