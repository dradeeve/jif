<?php
require_once "conexao.php";

// Verifique as credenciais do usuário
$email = $_POST["email"];
$senha = $_POST["senha"];

// Lógica para verificar as credenciais - substitua por sua própria lógica
// Por exemplo, você pode verificar os dados no banco de dados

$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows == 1) {
    session_start();
    $_SESSION["NomeUsuario"] = $row["nome"];
    // Credenciais corretas, redirecione para a página após o login
    if ($row["usuario_admin"] == 1) {
        header("Location: admin.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    // Credenciais incorretas, exiba uma mensagem de erro ou faça algo similar
    echo "Credenciais incorretas. Por favor, tente novamente.";
    header("Location: index.php?email=$email&senha=$senha");
    exit();
}

$conn->close();
?>