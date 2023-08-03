<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">

    <style>
        /* Estilo para a mensagem de erro */
        .dio {
            position: absolute;
            right: 10px;
            top: 0px;
            padding: 15px;
            border-radius: 5px;
            background-color: rgb(230, 70, 70);
            color: #fff;
        }
    </style>

    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <!-- Defina o atributo "action" vazio para submeter o formulário para a mesma página -->
            <form id="cadastroForm" action="" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <?php
                // Verifica se os dados do formulário foram enviados
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obtém os valores dos campos do formulário
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $telefone = $_POST["telefone"];
                    $senha = $_POST["senha"];
                    $confirma_senha = $_POST["confirma_senha"];
                    $confirma_email = $_POST["confirma_email"]; // Adicionado

                    // Verifica se as senhas são iguais
                    if ($senha !== $confirma_senha) {
                        // Exibe a mensagem de erro
                        header('Location: cadastro.php?fail=true');
                    } else if ($email !== $confirma_email) {
                        // Verifica se os e-mails são iguais
                        // Exibe a mensagem de erro
                        echo "<div class='dio'>Os e-mails digitados não coincidem. Por favor, tente novamente.</div>";
                        // Chama a função JS para ocultar a mensagem após um tempo
                        echo "<script>hideErrorMessage();</script>";
                    } else {
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

                        // Insere os dados na tabela do banco de dados
                        $sql = "INSERT INTO cadastros (nome, email, telefone, senha)
                            VALUES ('$nome', '$email', '$telefone', '$senha')";

                        if ($conn->query($sql) === TRUE) {
                           header('Location: login.php?cadastro=true');
                        } else {
                            // Exibe a mensagem de erro
                            echo "<div class='dio'>Erro ao cadastrar: " . $conn->error . "</div>";
                            // Chama a função JS para ocultar a mensagem após um tempo
                            echo "<script>hideErrorMessage();</script>";
                        }

                        // Fecha a conexão
                        $conn->close();
                    }
                }
                ?>

                <div class="continue-button">
                    <!-- Altere o tipo do botão para "button" para evitar envio automático do formulário -->
                    <button type="button" onclick="submitFormAndRedirect()">Continuar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Função para ocultar a mensagem de erro após um tempo
        function hideErrorMessage() {
            var errorMessage = document.querySelector(".dio");
            setTimeout(function() {
                errorMessage.style.display = "none";
            }, 3000); // Tempo em milissegundos (3 segundos)
        }

        // Função para ocultar a mensagem de sucesso após um tempo
        function hideSuccessMessage() {
            var successMessage = document.querySelector(".dio");
            setTimeout(function() {
                successMessage.style.display = "none";
            }, 3000); // Tempo em milissegundos (3 segundos)
        }

        // Função para enviar o formulário e redirecionar para a página de login
        function submitFormAndRedirect() {
            // Obtém o elemento do formulário
            var form = document.getElementById("cadastroForm");
            // Define o action para a página de login
            form.action = "login.php";
            // Submete o formulário
            form.submit();
        }
    </script>
</body>

</html>
