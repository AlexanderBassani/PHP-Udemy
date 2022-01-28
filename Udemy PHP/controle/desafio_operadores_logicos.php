<div class="titulo">Desafio Operadores Lógicos PHP</div>

<form action="" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="0">Não Executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta):</label>
        <select name="t2" id="t2">
            <option value="0">Não Executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;;
    }
</style>

<?php
if(isset($_POST['t1']) && isset($_POST['t2'])){

    echo $_POST['t1'];
    echo $_POST['t2'];
    // echo $_POST['t1'] === '1';
    // echo !!$_POST['t2'];

    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    // $t1 = $_POST['t1'];
    // $t2 = $_POST['t2'];


    $tv = '';
    $sorvete;

    // $concluidos =  ($t2 && $t1) || ($t2 || $t1) || ($t2 == false && $t1 == false);
    
    if($t1 && $t2){
        $tv = "50'";
        $sorvete = true;
    }
    
    if($t1 != $t2){
        $tv = "32'";
        $sorvete = true;
    }
    
    if($tv){
        $resultado = "Vamos comprar uma tv de {$tv} ";
    }else{
        $resultado = "Sem tv dessa vez ";
    }
    
    if(!$sorvete){
        $resultado .= "Estamos mais saúdaveis";
    }else{
        $resultado .= "Sorvete Liberado \o/";
    }
    
    echo "<p>$resultado</p>";
}