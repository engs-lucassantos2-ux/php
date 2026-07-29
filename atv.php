<?php

// atividade 1
$idade = 18;
$dinheiro = 30;

if ($idade >= 18) {
    echo "Você é maior de idade\n";
} else {
    echo "Você é menor de idade\n";
}

// atividade 2
if ($dinheiro < 3) {
    echo "Pobre";
} elseif ($dinheiro < 10) {
    echo "Classe Média";
} elseif ($dinheiro < 25) {
    echo "Riquinho";
} elseif ($dinheiro < 40) {
    echo "Ricão";
} else {
    echo "Elon Musk";
}

// atividade 3
$numero1 = 10;
$numero2 = 20;
$operacao = "+";

switch($operacao) {
    case "+":
        echo $numero1 + $numero2, "\n";
        break;
    case "-":
        echo $numero1 - $numero2,"\n";
        break;
    case "*":
        echo $numero1 * $numero2,"\n";
        break;
    case "/":
        echo $numero1 / $numero2,"\n";
        break;
    default:
        echo "operação invalida";
}