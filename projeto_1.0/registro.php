<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $checkUsernameQuery = "SELECT * FROM usuarios WHERE username = '$username'";
    $checkUsernameResult = $conn->query($checkUsernameQuery);

    if ($checkUsernameResult->num_rows > 0) {
        $response = array('success' => false, 'message' => 'Nome de usuário já em uso. Escolha outro.');
        echo json_encode($response);
        exit();
    }

    $insertUserQuery = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
    if ($conn->query($insertUserQuery) === TRUE) {
        $response = array('success' => true, 'message' => 'Cadastro bem-sucedido. Faça login agora.');
        echo json_encode($response);
        exit();
    } else {
        $response = array('success' => false, 'message' => 'Erro ao cadastrar o usuário. Tente novamente.');
        echo json_encode($response);
        exit();
    }

    $conn->close();
}
?>
