<?php 

$raca = 'vira lata';
$idade = 9;
$cor = 'preto';
$name = 'pingo';

$animal = compact("raca","idade","cor","name");

print_r($animal);
echo "<br>";

 foreach($animal as $caracteristica => $valor){

    echo "$caracteristica : $valor . <br>";
 }




?>