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
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem
    }   
</style>

<?php

const FATOR_KM_MILHA =  0.621371;
const FATOR_KM_METRO = 1000;
const FATOR_MILHA_KM = 1.60934;
const FATOR_MILHA_METRO = 1609.34;
const FATOR_METRO_KM = 1 / 1000;
const FATOR_METRO_MILHA = 1 / 1609.34;



if(isset($_POST['param']) && isset($_POST['conversao'])){

    $param = $_POST['param'] ?? 0;
    $tipo = $_POST['conversao'];
    
    $resultado = 0;
    $unidade = 'indefinido';
    
    switch($tipo){
        case 'km-milha': 
            $resultado = $param * FATOR_KM_MILHA;
            $unidade = 'Milha(s)';
            break;
        case 'km-metro': 
            $resultado = $param * FATOR_KM_METRO;
            $unidade = 'Metro(s)';
            break;
        case 'milha-km': 
            $resultado = $param * FATOR_MILHA_KM;
            $unidade = 'Km(s)';
            break;
        case 'milha-metro': 
            $resultado = $param * FATOR_MILHA_METRO;
            $unidade = 'Metro(s)';
            break;
        case 'metro-km': 
            $resultado = $param * FATOR_METRO_KM;
            $unidade = 'Km(s)';
            break;
        case 'metro-milha': 
            $resultado = $param * FATOR_METRO_MILHA;
            $unidade = 'Milha(s)';
            break;
        case 'celsius-fahrenheit': 
            $resultado = ( $param * (9 / 5) ) + 32;
            $unidade = '°F';
            break;
        case 'fahrenheit-celsius': 
            $resultado = ($param - 32) * (5 / 9);
            $unidade = '°C';
            break;
        default:
            $unidade = 0;
    }

    $resultadoFormatado = number_format($resultado, 2, ',', '.');

    echo $param;

    if($unidade){
        $mensagem = "Resultado: $resultadoFormatado $unidade";
    }else{
        $mensagem = "Nenhum valor encontrado, nada a calcular";
    }

    echo "<p> $mensagem </p>";
}