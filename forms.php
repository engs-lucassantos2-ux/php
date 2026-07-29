<?php
$imc = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];

    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="POST">
        <label>Peso (kg): <input type="number" step="0.01" name="peso" required></label><br>
        <label>Altura (m): <input type="number" step="0.01" name="altura" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($imc !== null): ?>
        <p>Seu IMC é: <?php echo number_format($imc, 2); ?></p>
    <?php endif; ?>
</body>
</html>