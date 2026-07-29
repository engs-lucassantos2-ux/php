<?php
$dados = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dados = [
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "telefone" => $_POST["telefone"],
        "nascimento" => $_POST["nascimento"],
        "cidade" => $_POST["cidade"],
        "estado" => $_POST["estado"],
        "sexo" => $_POST["sexo"],
        "curso" => $_POST["curso"],
        "observacoes" => $_POST["observacoes"]
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        .cartao {
            border: 1px solid #333;
            border-radius: 8px;
            padding: 16px;
            max-width: 400px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Formulário de Cadastro</h1>

    <form method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Telefone: <input type="tel" name="telefone" required></label><br>
        <label>Data de nascimento: <input type="date" name="nascimento" required></label><br>
        <label>Cidade: <input type="text" name="cidade" required></label><br>
        <label>Estado: <input type="text" name="estado" required></label><br>
        <label>Sexo:
            <select name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </label><br>
        <label>Curso: <input type="text" name="curso" required></label><br>
        <label>Observações: <textarea name="observacoes"></textarea></label><br>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($dados !== null): ?>
        <div class="cartao">
            <h2>Cartão de Cadastro</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($dados["nome"]); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($dados["email"]); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($dados["telefone"]); ?></p>
            <p><strong>Nascimento:</strong> <?php echo htmlspecialchars($dados["nascimento"]); ?></p>
            <p><strong>Cidade:</strong> <?php echo htmlspecialchars($dados["cidade"]); ?></p>
            <p><strong>Estado:</strong> <?php echo htmlspecialchars($dados["estado"]); ?></p>
            <p><strong>Sexo:</strong> <?php echo htmlspecialchars($dados["sexo"]); ?></p>
            <p><strong>Curso:</strong> <?php echo htmlspecialchars($dados["curso"]); ?></p>
            <p><strong>Observações:</strong> <?php echo htmlspecialchars($dados["observacoes"]); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>