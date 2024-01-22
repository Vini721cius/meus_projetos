<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="container">
        <form id="registerForm">
            <h2>Cadastro</h2>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Cadastrar</button>
        </form>
        <p id="registerMessage"></p>
        <p>Não tem uma conta? <a href="index.php">voltar</a></p>
    </div>

    <script src="registro.js"></script>
</body>
</html>
