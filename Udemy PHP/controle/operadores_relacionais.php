<div class="titulo">Operadores relacionais PHP</div>

<?php
//echo '<br>';//+ '1 == 1';
var_dump(1 == 1); // false
echo '<br>';//+ '1 > 1';
var_dump(1 > 1); // true
echo '<br>';//+ '1 >= 1';
var_dump(1 >= 1); // true
echo '<br>';//+ '4 < 23';
var_dump(4 < 23); // true
echo '<br>';//+ '1 <= 7';
var_dump(1 <= 7); // false
echo '<br>';//+ '1 != 1';
var_dump(1 != 1); // false
echo '<br>';//+ '1 <> 1';
var_dump(1 <> 1); // false

echo '<br>';//+ '1 == "1"';
var_dump(1 == '1'); // true
echo '<br>';//+ '1 === "1"';
var_dump(1 === '1'); // false
echo '<br>';//+ '1 != "1"';
var_dump(1 != 1); // false
echo '<br>';//+ '1 !== "1"';
var_dump(1 !== '1'); // true



echo "<p> Relacionais no If/Else </p><hr>";

$idade = 15;
if($idade < 18){
    echo "menor de idade = $idade anos <br>";
}else if ($idade <= 65 ){
    echo "Adulto = $idade anos <br>";
}else{
    echo "Idoso(a) = $idade anos <br>";
}

echo '<p>Spaceship</p><hr>';
var_dump(500<=>3);
var_dump(50<=>50);
var_dump(3<=>500);

echo '<p>Valores podem ser verdadeiro ou falso</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>

<style>
p{
    margin-bottom: 0px;
}
hr{
    margin-top: 0;
}
</style>