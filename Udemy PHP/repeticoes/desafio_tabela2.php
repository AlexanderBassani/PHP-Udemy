<div class="titulo">Desafio Tabela 2</div>

<form action="" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" id="linhas" name="linhas" value="<?= $_POST['linhas'] ?>">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" id="colunas" name="colunas" value="<?= $_POST['colunas'] ?>">
    </div>
    <button>Gerar Tabela</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;;
    }
</style>

<?php
// echo isset('linhas');

if(isset($_POST['linhas']) && $_POST['colunas']){
    $linhas = (intval($_POST['linhas']));
    $colunas = (intval($_POST['colunas']));

    $num = 1;
    echo '<table>
            <tbody>';    
        for($i = 0; $i < $linhas; $i++){
            echo '<tr>';
            for($j = 0; $j < $colunas; $j++){
                echo "<td>{$num}</td>";
                $num++;
            } 
            echo '</tr>';
        }
    echo   '</tbody>
         </table>';
}

?>


<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid #444
    }
    
    table td{
        padding: 10px 20px
    }
</style>