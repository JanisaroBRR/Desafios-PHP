<?php

class Aluno {
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;
    
    public function calcularMedia() {
        $media = ($this->nota1 * $this->peso1 + $this->nota2 * $this->peso2) / ($this->peso1 + $this->peso2);
        return $media;
    }
    public function exibirDados(){
        echo    "Nome do aluno(a): " . $this->nome . "<br>";
        echo    "idade do aluno(a): " . $this->idade . "<br>";
        echo    "matricula do aluno(a): " . $this->matricula . "<br>";
        echo    "Primeira nota do aluno(a): " . $this->nota1 . "<br>";
        echo    "Segunda nota do aluno(a): " . $this->nota2 . "<br>";
        echo    "Peso da primeira nota: " . $this->peso1 . "<br>";
        echo    "Peso da segunda nota: " . $this->peso2 . "<br>";
        echo    "Media do aluno(a): " . $this->calcularMedia() . "<br>";
    }
    public function verificarAprovacao() {
        $media = $this->calcularMedia();
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }

}



?>