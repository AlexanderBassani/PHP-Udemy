<div class="titulo">Valor de Referência PHP</div>

<?php 
$variavel = 'Valor Inicial';
echo $variavel;

//Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = "Novo Valor";
echo "<br>$variavel";
echo " $variavelValor";

//Atribuição por Refeência
$variavelReferencia = &$variavel;
$variavelReferencia = "mesma referencia";
echo "<br>$variavel $variavelReferencia";