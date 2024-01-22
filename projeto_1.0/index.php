
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <div class="container">
        <form id="loginForm">
            <h2>Login</h2>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
        <p id="loginMessage"></p>
        <p>Não tem uma conta? <a href="tela_registro.php">Registrar-se</a></p>
    </div>

    <script src="login.js"></script>
</body>
</html>
