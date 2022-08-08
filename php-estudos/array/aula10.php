<?php 
//verificando se a chave existe


  
    $reservedParams = [
      'sort',
      'fields',
      'page',
      'per_page',
      'count',
      'random',
      'limit',
      'only_trash',
      'with_trash'
  ];

      if(in_array('only_trash', $reservedParams)){
        echo "A chave existe <br>";
      }else{
        echo "A chave  nao existe <br>";
      }

      if(array_key_exists("7",$reservedParams)){
      echo "A chave existe <br>";
      }else{
      echo "A chave  nao existe <br>";
      }

      if(isset($reservedParams['7'])){
      echo "A chave existe <br>";
      }else{
      echo "A chave  nao existe <br>";
      }
    
?>













































// if (
            //!isset($this->queryString['order']) ||
          //  empty($this->queryString['order'])
        //) {