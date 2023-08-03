<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    
    // Obtém os valores dos campos do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conexão com o banco de dados (substitua pelas suas informações)
    $servername = "localhost";
    $username = "root"; // Substitua pelo nome de usuário do banco de dados
    $password = ""; // Substitua pela senha do banco de dados
    $dbname = "hc";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Verifica se o usuário existe no banco de dados
    $sql = "SELECT * FROM cadastros WHERE nome='$nome' AND email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // O login foi bem-sucedido e o usuário existe no banco de dados
        // Armazena o nome do usuário na sessão
        $row = $result->fetch_array();
        $_SESSION['idUsuario'] = $row[0];
        $_SESSION['nomeUsuario'] = $row['nome'];

        // Fecha a conexão
        $conn->close();
        header("Location: index.php");
        exit();
    } else {
        // Fecha a conexão
        $conn->close();

        // O login falhou ou o usuário não existe no banco de dados
        // Redireciona para a página de login com mensagem de erro
        header("Location: login.php?erro=1");
        exit();
    }
}
?>
