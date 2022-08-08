<?php 
// utilisando a função array_reduce
$arr = [1,2,4,19,245,12,34,5,12];

function soma($a, $b){
    return $a + $b;
}
$resultado = array_reduce($arr, "soma");
echo "$resultado <br>";
?>