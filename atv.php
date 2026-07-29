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

// atividade 4
for ($i = 0; $i <= 100; $i++){
    if($i % 2 == 0){
        echo $i, " ";
    }
}

//atividade 5
$numeros = [4,7, 12879.5];

foreach($numeros as $numero){
     echo "\nTabuada do $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = ", $numero * $i, "\n";
    }
}

//atividade 6
function saudacao($nome){
    echo "Olá $nome! \n";
}

saudacao("Dionatan Lindu");