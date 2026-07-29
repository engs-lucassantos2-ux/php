<?php
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case "somar":
            $resultado = $numero1 + $numero2;
            break;
        case "subtrair":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicar":
            $resultado = $numero1 * $numero2;
            break;
        case "dividir":
            $resultado = $numero2 != 0 ? $numero1 / $numero2 : "Erro: divisão por zero";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST">
        <label>Número 1: <input type="number" step="any" name="numero1" required></label><br>
        <label>Número 2: <input type="number" step="any" name="numero2" required></label><br>

        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>

    <?php if ($resultado !== null): ?>
        <p>Resultado: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>