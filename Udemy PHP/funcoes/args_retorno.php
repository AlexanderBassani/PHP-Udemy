<div class="titulo">Args e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja bem vindo(a)!';
}

obterMensagem();
echo obterMensagem();
echo '<br>';
$msm = obterMensagem();
echo $msm;
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Seja bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Alex');
echo '<br>', obterMensagemComNome('Bassani');

function soma($a,$b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>', soma(45,78);
echo '<br>', soma($x,$y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 3);
echo '<br>', $variavel;
