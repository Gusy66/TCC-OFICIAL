<?php
session_start(); // Inicia a sessão


if (isset($_POST['username']) && isset($_POST['password'])) {
    // Conecta-se ao banco de dados
    require_once('dbconn.php');
    
    // Escapa os caracteres especiais para prevenir injeção de SQL
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Busca o usuário no banco de dados
    $query = "SELECT * FROM usuario WHERE user='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    // Verifica se o usuário existe e redireciona para a página index.php
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section id="section2">
        <form method="post" action="login.php">
            <label>Usuário:</label>
            <input class="caixinhaInput" type="text" name="username" required><br>
            <label>Senha:</label>
            <input class="caixinhaInput" type="password" name="password" required><br>
            <input type="submit" value="Entrar">
        </form>
    </section>
</body>
</html>
