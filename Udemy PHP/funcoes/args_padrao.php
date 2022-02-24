<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $Sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Alexander', 'Bassani Amaral');

function anotaPedido($comida, $bebida = 'Água'){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

anotaPedido('Hamburger');

function anotaPedido2($bebida = 'Água', $comida){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

// anotaPedido2('Água');
anotaPedido2('Água2','Hamburger2');

