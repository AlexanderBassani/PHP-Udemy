<div class="titulo">Constantes PHP</div>

<?php 
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>'. NOVISSIMA_TAXA;
// const NOVISSIMA_TAXA = $valorVariavel;
define('NOVISSIMA_TAXA2', $valorVariavel);
echo '<br>'. NOVISSIMA_TAXA2;

echo '<br>'. PHP_VERSION;
echo '<br>'. PHP_INT_MAX;

echo '<br> Linha:'. __LINE__;
echo '<br> Arquivo:'. __FILE__;
echo '<br> Diretório:'. __DIR__;

