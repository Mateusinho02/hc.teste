
<?php 
if (isset($_GET['erro'])) {
    echo "<div class='dio'>Erro de login. Por favor, verifique suas credenciais e tente novamente.</div>";
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">

    <title>Formulário</title>
    <style>
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
</head>

<body>
    <?php 
    if (isset($_GET['cadastro'])) {
        echo "<div class='dio'>Cadastro realizado com sucesso!</div>";
    
    }
    
    ?>
    <div class="container">
        
        <div class="form">
            <!-- Defina o atributo "action" para indicar o arquivo PHP que irá processar o formulário -->
            <form action="processar_login.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Entrar</h1>
                    </div>
                </div>  

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>

               
                <div class="continue-button">
                    <!-- Altere o tipo do botão para "submit" para enviar o formulário -->
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
