<?php 
 //array associativo , array_keys recebe as chaves do array e array_values recebe os valores
 $carro =[
    'marca' => 'BMW',
    'motor'=> '2.4',
    'teto_solar' => true,
    'cambio' =>'manual',
    'portas' => 4
 ];
  $chaves = array_keys($carro);
  print_r($chaves);
  echo "<br>";

  $valores = array_values($carro);
  print_r($valores);
  echo "<br>";
?>