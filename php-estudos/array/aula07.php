<?php 
//usando o array_slice para exibir os array conforme os paramentros passados 
$arr=[2,4,6,8,10,12,14,16,18];

print_r($arr);
echo"<br>";

$slice1 = array_slice($arr,1,3);
print_r($slice1);
echo"<br>";
$slice2 = array_slice($arr ,4,4);
print_r($slice2);
echo"<br>";
$slice3 = array_slice($arr,4);
print_r($slice3);
echo"<br>";
?>