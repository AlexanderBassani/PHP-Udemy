<div class="titulo">Desafio Precedência PHP</div>

<?php
echo '<p>1. qual o valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); //INF

echo '<p>2. qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15, '<br>'; //45
echo 'b) ', 4 * 5 ** 2, '<br>';        //100
echo 'c) ', 2 ** 3 **4 / 1e25, '<br>'; 
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>';//12