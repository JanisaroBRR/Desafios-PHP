<?php

require "Alunos.php";

$Aluno = new Aluno();

if (isset($_POST["userName"])) {
    $Aluno->nome = $_POST["userName"];
} else {
    $Aluno->nome = '';
}

if (isset($_POST["userAge"])) {
    $Aluno->idade = $_POST["userAge"];
} else {
    $Aluno->idade = '';
}

if (isset($_POST["userMatricula"])) {
    $Aluno->matricula = $_POST["userMatricula"];
} else {
    $Aluno->matricula = '';
}

if (isset($_POST["userNota"])) {
    $Aluno->nota1 = $_POST["userNota"];
} else {
    $Aluno->nota1 = 0;
}

if (isset($_POST["userNota2"])) {
    $Aluno->nota2 = $_POST["userNota2"];
} else {
    $Aluno->nota2 = 0;
}

if (isset($_POST["userPeso"])) {
    $Aluno->peso1 = $_POST["userPeso"];
} else {
    $Aluno->peso1 = 1;
}

if (isset($_POST["userPeso2"])) {
    $Aluno->peso2 = $_POST["userPeso2"];
} else {
    $Aluno->peso2 = 1;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>

<body>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 1.0rem;
            width: 30.0rem;
        }
        input {
            width: 50%;
        }
        button {
            width: 53%;
        }
    </style>
    <form method="POST">
        <label>
            <p>Digite os dados do Aluno(a)</p>
        </label>
        <input type="name" id="userName" name="userName" placeholder="Digite seu Nome">
        <input type="number" id="userAge" name="userAge" placeholder="Digite sua Idade">
        <input type="number" id="userMatricula" name="userMatricula" placeholder="Digite sua Matrícula">
        <input type="number" id="userNota" name="userNota" placeholder="Digite sua Nota">
        <input type="number" id="userNota2" name="userNota2" placeholder="Digite sua Segunda Nota">
        <input type="number" id="userPeso" name="userPeso" placeholder="Digite o peso da Nota">
        <input type="number" id="userPeso2" name="userPeso2" placeholder="Digite o peso da Segunda Nota">
        <button type="submit">Cadastrar</button>


        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $Aluno->exibirDados();
            echo "Situação: " . $Aluno->verificarAprovacao();
        }
        ?>
    </form>

</body>

</html>