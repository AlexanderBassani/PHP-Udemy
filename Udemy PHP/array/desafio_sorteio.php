<div class="titulo">Desafio Sorteio</div>

<?php
$nome = ['Alexander','Bassani','Amaral','Souza'];

$random = array_rand($nome);
echo "$random = $nome($random) <br>";
echo "$random = $nome[$random]";