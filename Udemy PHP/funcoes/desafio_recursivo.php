<div class="titulo">Desafio Busca Recursiva</div>

<?php
/*
$array = [1,2[3,4,5],6,[7,[8,9]],10];
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
*/

$array = [1,2,[3,4,5],6,[7,[8,9]],10];

function imprimeArray($array){
    foreach($array as $first){
        if(!is_array($first)){
            echo "> $first <br>";
        }else{
            foreach($first as $second){
                if(!is_array($second)){
                    echo ">> $second <br>";
                }else{
                    foreach($second as $third){
                        echo ">>> $third <br>";
                    }
                }
            }
        }
    }
}

imprimeArray($array);

function imprimeArray2($array, $nivel = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimeArray2($elemento, $nivel . $nivel[0]);
        }else{
            echo "$nivel $elemento<br>";
        }
    }
}

imprimeArray2($array);
imprimeArray2($array,'#');
imprimeArray2($array,'ø');