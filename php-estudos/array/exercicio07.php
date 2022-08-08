<?php
	$lista = [3, 4, 1, 10, 5, 2, 3, -10, -9, 5];
	$aux = null;
	
	for($i = 0; $i < count($lista); $i++){
		if($i < count($lista) - 1)
			$k = $i + 1;
		for($j = 0; $j < count($lista); $j++){
			if($lista[$j] > $lista[$k]){
				$aux = $lista[$j];
				$lista[$j] = $lista[$k];
				$lista[$k] = $aux;
			}
		}
	}
	
	for($i = 0; $i < count($lista); $i++){
		echo $lista[$i] . " ";
	}





    
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
?>
