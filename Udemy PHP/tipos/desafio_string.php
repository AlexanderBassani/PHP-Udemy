<div class="titulo">Desafio String PHP</div>

<?php
//Enunciado:
//Avaliando os métodos da documentação da string
//qual o método que a posição dp texto 'abc
//na string '!AbcaBcabc' retorne 1

echo '<br>' . strpos('!AbcaBcabc','abc');
echo '<br>' . stripos('!AbcaBcabc','abc');
echo '<br>' . strpos(strtolower('!AbcaBcabc'),strtolower('ABC'));