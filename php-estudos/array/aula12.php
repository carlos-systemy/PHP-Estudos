<?php 

$arr = [
    'cor'=>'vermelho',
    'forma'=>'retangular',
    'material'=>'aco'
];
extract($arr);
 echo "$cor <br>";
 echo "$forma <br>";
 echo "$material <br>";

 $nome ="jose";

 $pessoa =[
    'nome'=>'joao',
    'idade'=>29,
 ];
    echo "$nome<br>";
 extract($pessoa);
    echo "$nome <br>";
    echo "$idade <br>";
    
?>