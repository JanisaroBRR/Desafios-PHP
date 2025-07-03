<?php

class Carro {
    public $cor;
    public $marca;
    public $modelo;
    public function acelerar() {
        echo "Velozes e Furiosos😎😎";
    }
    public function frear() {
        echo "⭐⭐⭐⭐⭐⭐😥😥💀💀";
    }
}
class CarroEletrico extends Carro {
    //POLIMORFISMO = PUBLIC, PRIVATE ou PROTECTED
    public $autonomia;

    public function recarregar() {
        echo "Recarregando a bateria do carro elétrico. <br>";
    }
}

?>