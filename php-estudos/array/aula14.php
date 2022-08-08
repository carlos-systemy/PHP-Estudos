<?php 
//utilizando foreach com array
$arr = [
    'Nome'=>'José',
    'Idade'=>15,
    'Profissao'=>'Desenvolvedor'

];

foreach($arr as $caracteristica => $value){

    echo "$caracteristica : $value <br>";
}



?>