<?php


/**
 * Função de validação de e-mail
 * @param string $email Endereo de e-mail a ser validado
 * @return bool resultado booleano da validação
 * 
 */
function validarEnderecoEmail(string $email): bool
{
    return filter_var((string) $email, FILTER_VALIDATE_EMAIL);

}
$diaDaSemana = 1;
// ==
switch ($diaDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-Feira";
        break;
    case 3:
        echo "Terça-Feira";
        break;
    case 4:
        echo "Quarta-Feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-Feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "O número informado não equivale a um dia de semana válido!";
        break;
}
// ===
$resultado = match($diaDaSemana) {
    1 => "Domingo",
    2 => "Segunda-Feira",
    3 => "Terça-Feira",
    4 => "Quarta-Feira",
    5 => "Quinta-feira",
    6 => "Sexta-Feira",
    7 => "Sábado",
    default => "O número informado não equivale a um dia de semana válido!"
};


?>