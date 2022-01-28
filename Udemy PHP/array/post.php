<div class="titulo">$_POST</div>

<!-- form:post form:get -->

<form action="#" method="post" style="font-size:1.8rem">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" id="">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<?php
print_r($_POST);
echo '<br>';
print_r($_GET);
echo '<br>' . count($_POST);