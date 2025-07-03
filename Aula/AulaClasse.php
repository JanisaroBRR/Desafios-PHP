<?php

require "Carros.php";

//OBJETO (INSTÂNCIA DE UMA CLASSE)
$Carro = new Carro();
$Carro2 = new Carro();
$carroEletrico = new CarroEletrico();

$carroEletrico->cor = "Branco";
$carroEletrico->marca = "BYD";
$carroEletrico->modelo = "SEAL";
$carroEletrico->autonomia = "372km";


// ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
$Carro->cor = "Preto";
$Carro->marca = "Fiat";
$Carro->modelo = "Uno(com escada em cima)";


$Carro2->cor = "Roxo";
$Carro2->marca = "BMW";
$Carro2->modelo = "320i 2.0 16V Turbo M Sport ActiveFlex Aut.";
echo "Cor: ". $Carro->cor . "<br>Marca: " . $Carro->marca . "<br>Modelo: " . $Carro->modelo . "<br>";
echo "Cor: ". $Carro2->cor . "<br>Marca: " . $Carro2->marca . "<br>Modelo: " . $Carro2->modelo . "<br>";

?>