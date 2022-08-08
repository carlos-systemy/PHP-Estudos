<?php
$arr=[
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]

];
    //maneira mais simples
    for($i=0;$i <count($arr);$i++){
        echo "Array interno".($i+1)."<br>";

        for($j =0; $j<count($arr[$i]);$j++){
            echo $arr[$i][$j]."<br>";
        }
    }

    //maneira mais trabalhosa de se fazer

    //echo "Array geral"."<br>";
    //print_r($arr);
    //echo"<br>"."Mudando do Array geral para o array[0]"."<br>";
    //print_r($arr[0]);
    //echo "<br>"."Mudando para Array[1]"."<br>";
    //print_r($arr[1]);
    //echo "<br>"."Mudando para Array[2]"."<br>";
    //print_r($arr[2]);
    //echo "<br>"."Fim do Array";

?>