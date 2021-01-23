<div class="titulo">Tipo String PHP</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu Também");// var_dump conta o acento como um caracter a mais
echo '<br>';

//Concatenação
echo "Nós também" . ' somos';
echo '<br>' , "também aceito", " virgulas";
echo '<br>' , "Número é ", 123;
echo '<br>';

echo "'Teste' ".'"Teste" '.'\'Teste\' ' . "\"Teste\" " . "\n" . "\t";

print("<br> Também existe a função print");
print "<br> Também existe a função print";

//Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas letras');
echo '<br>' . mb_strlen('eu também', "utf-8");
echo '<br>' . substr('só uma parte mesmo',7,6);
echo '<br>' . str_replace('isso','aquilo','trocar isso');
