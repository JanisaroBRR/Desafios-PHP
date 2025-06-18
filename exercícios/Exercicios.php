<?php
require 'helpers.php';
echo "<hr>";


echo validarEnderecoEmail('fredalefsr@gmail.com');
//echo validarEnderecoEmail('https://google.com');
//PHPDoc
/** 
* @param string nome Nome do usuário
* @return string mensagem de saudação com o nome do usuário
* @author JanisaroBRR <fredalefsr@gmail.com> 
*/

// Exercício 1:
echo "<h1>Exercício 01 no PHP</h1> <br>";
echo "Hello World!";


//Exercício 2:
echo "<h1>Exercício 02 no PHP</h1> <br>";
$num1 = 4;
$num2 = 5;
$soma = $num1 + $num2;
$sub = $num1 - $num2;
$divi = $num2 / $num1;
$multi = $num2 * $num1;
echo "Primeiro número: " . "$num1 <br>";
echo "Primeiro número: " . "$num2 <br>";
echo "Operações: <br>";
echo "Soma dos elementos: " . "$soma <br>";
echo "Subtração dos elementos: " . "$sub <br>";
echo "Divisão dos elementos: " . "$divi <br>";
echo "Multiplicação dos elementos: " . "$multi <br>";
//Exercício 3:
echo "<h1>Exercício 03 no PHP</h1> <br>";
$idade = "18";
echo "Fulano tem " . $idade . " anos de idade";

if ($idade >= 18) {
    echo "<br> Fulano é maior de idade!";
} else {
    echo "<br> Fulano é menor de idade!";
}
//Exercício 4:
echo "<h1>Exercício 04 no PHP</h1> <br>";

$preco = 500;
$desconto = 0.01;
$total = (($preco * $desconto) - $preco) * -1;
$preco = number_format($preco, 2, ".", ",");
$total = number_format($total, 2, ".", "");

echo "O jogo Mario Kart world está custando R$" . $preco . " Reais <br>";
echo "Após a aplicação do incrível desconto de " . $desconto * 100 . "% (Cortesia da Nintendo)<br>";
echo "Este produto passa a custar: R$" . $total . " Reais";
//Exercício 5:
echo "<h1>Exercício 05 no PHP</h1> <br>";


$Pontuacao = 100;

echo "Um jogador tem " . $Pontuacao . " Pontos <br>";
for ($i = 0; $i < 9; $i++) {
    if ($i <= 2) {
        $Pontuacao += 20;
    } else {
        $Pontuacao -= 15;
    }
}
echo "Após jogar 10 partidas, ganhar 3 partidas e perder 7 ele agora tem " . $Pontuacao . " Pontos";

//Exercício 6:
echo "<h1>Exercício 06 no PHP</h1> <br>";

$nota1 = 6;
$nota2 = 7;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Um aluno Tirou as seguintes notas nas 3 unidades: <br>" . "Unidade 1: $nota1 <br>" . "Unidade 2: $nota2<br>" . "Unidade 3: $nota3 <br>";

$media = number_format($media, 2, ".", "");
echo "A sua média foi: " . $media . "<br>";
if ($media >= 7) {
    echo "Logo este aluno está aprovado";
} else {
    echo "Logo este aluno não está aprovado";
}
//Exercício 7:
echo "<h1>Exercício 07 no PHP</h1> <br>";

$usuario = "JanisaroBRR";
$senha = "Sla";
echo "Dado que Estou fazendo login e insiro meu usuário: $usuario" . " e minha senha: $senha <br>";
echo "A mensagem que eu receberei será: ";
if ($usuario === "JanisaroBRR" and $senha === "Sla") {
    echo "Bem vindo(a) de volta!";
} else {
    echo "Usuário ou Senha Incorretos!";
}
//Exercício 8:
echo "<h1>Exercício 08 no PHP</h1> <br>";

for ($i = 10; $i > 0; $i--) {

    echo "$i <br>";
    if ($i == 1) {
        echo "Feliz Ano Novo!!!";
    }
}
//Exercício 9:
echo "<h1>Exercício 09 no PHP</h1> <br>";

$somapar = 0;
$par = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $par = $i;
        $somapar += $par;
    }
}
echo "A soma de todos os números pares de 1 a 100 é: $somapar";

//Exercício 10:
echo "<h1>Exercício 10 no PHP</h1> <br>";

function boasVindas($nome)
{
    return "Bem-vindo(a), $nome!";
}

echo boasVindas("Thiago");


//Exercício 11:
echo "<h1>Exercício 11 no PHP</h1> <br>";
$arr = [40, 30, 60, 50, 10];
$total2 = 0;
$i = 1;
foreach ($arr as $nome => $produto) {
    echo $i . "° Produto: " . $produto . "<br>";
    $total2 += $produto;
    $i += 1;
}
echo "Total das compras: " . $total2;

//Exercício 12:
echo "<h1>Exercício 12 no PHP</h1> <br>";

$arr2 = [
    "Nome" => "Alguem",
    "Idade" => 18,
    "E-mail" => "alguem@gmail.com"
];

foreach ($arr2 as $dado => $valor) {
    echo "$dado: " . "$valor <br>";
}
//Exercício 13:
echo "<h1>Exercício 13 no PHP</h1> <br>";

$arr3 = [
    "1° Produto: Chuveiro " => "Preço: R$" . 50,
    "2° Produto: Playstation 7 Ultra Pro Max " => "Preço: R$" . 18000,
    "3° Produto: Alguma coisa " => "Preço: R$" . 9999
];
foreach ($arr3 as $dado => $valor) {
    echo "$dado: " . "$valor <br>";
}
//Exercício 14:
echo "<h1>Exercício 14 no PHP</h1> <br>";

$arr4 = [
    "Aluno: Fulano" => 6,
    "Aluno: Elon Musk" => 1000,
    "Aluno: Alanzoka" => 9999
];
$mediaAlunos = 0;
foreach ($arr4 as $aluno => $nota) {
    echo "$aluno " . "Nota: $nota <br>";
    $mediaAlunos += $nota;
}
$mediaAlunos = $mediaAlunos / 3;
$mediaAlunos = number_format($mediaAlunos, 2, ",", "");
echo "A média desses alunos é: $mediaAlunos";

?>