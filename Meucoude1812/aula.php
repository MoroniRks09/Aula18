<?php
 include ("./diacoude18.php");

$nome_aleatorio = 30;

$pesso = [];

 for ($for_count = 0; $for_count < $nome_aleatorio; $for_count++){
    $pessoas = pessoa();
    $pesso = [$for_count] =$pessoas; 
    var_dump($pessoas); 

}

echo 'for - ' . $for_count . '<br>';












?>
