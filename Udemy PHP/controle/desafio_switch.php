<div class="titulo">Desafio Switch PHP</div>

<form action="#" method="post">
    <input type="text" name="param" id="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="km-metro">KM > Metro</option>
        <option value="milha-km">Milha > KM</option>
        <option value="milha-metro">Milha > Metro</option>
        <option value="metro-km">Metro > Km</option>
        <option value="metro-milha">Metro > Milha</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem
    }   
</style>

<?php


if(isset($_POST['param']) && isset($_POST['conversao'])){

    $param = $_POST['param'] ;
    $tipo = $_POST['conversao'];
    
    $resultado = 0;
    $unidade = 'indefinido';
    
    switch($tipo){
        case 'km-milha': 
            $resultado = $param * 0.621371;
            $unidade = 'Milha(s)';
            break;
        case 'km-metro': 
            $resultado = $param * 1000;
            $unidade = 'Metro(s)';
            break;
        case 'milha-km': 
            $resultado = $param * 1.60934;
            $unidade = 'Km(s)';
            break;
        case 'milha-metro': 
            $resultado = $param * 1609.34;
            $unidade = 'Metro(s)';
            break;
        case 'metro-km': 
            $resultado = $param / 1000;
            $unidade = 'Km(s)';
            break;
        case 'metro-milha': 
            $resultado = $param / 1609.34;
            $unidade = 'Milha(s)';
            break;
    }

    $resultadoFormatado = number_format($resultado, 2, ',', '.');

    $mensagem = "Resultado: $resultadoFormatado $unidade";
    echo "<p> $mensagem </p>";
}