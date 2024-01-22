<?php
session_start();

/* Verifica se o usuário já está logado
if (isset($_SESSION['id'])) {
    header("Location: dash.php");
    exit();
}
*/
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_config.php'; // Inclua o arquivo de configuração do banco de dados

    // Obtém os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proteção contra SQL injection (use Prepared Statements em produção)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Consulta ao banco de dados para verificar o login
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido, redireciona para a dashboard
        $user = $result->fetch_assoc();
        $_SESSION['id'] = $user['id'];

        // Retorna uma resposta JSON indicando sucesso
        $response = array('success' => true);
        echo json_encode($response);
        exit();
    } else {
        // Login falhou
        $response = array('success' => false, 'message' => 'Usuário ou senha incorretos!');
        echo json_encode($response);
        exit();
    }

    $conn->close(); // Fecha a conexão com o banco de dados
}

?>
