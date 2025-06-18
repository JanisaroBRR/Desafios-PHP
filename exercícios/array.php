<?php

$idade = 10;
$nome = "sla";
//DEBUGANDO VARIÁVEIS
var_dump($nome, $idade);


// 1° FORMA DE CRIAR UM ARRAY
$arr = array(1,2,3,4,5);
//2° FORMA DE CRIAR ARRAY
$arr2 = [1,2,3,4,5];

echo "<br>";

echo $arr[0] . " ". $arr[1] . "<br>";

foreach($arr2 as $number){

    echo $number . "<br>";
}

?>