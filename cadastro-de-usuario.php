<?php

    session_start();

    include_once 'utl/helper.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--
            50 caracteres
        -->
        <title>HolaViagens</title>
        
        <meta charset="UTF-8">
		<!--
            <meta http-equiv="default-style" content="">
            <meta http-equiv="Refresh" content="">
        -->
		<meta name="author" content="Bruno Gressler da Silveira">
		<!--
            caracters 150
        -->
		<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
        <meta name="robots" content="index,nofolow">
        
        <link rel="stylesheet" type="text/css" href="style/estilos.css">
        <link rel="shortcut icon" href="#">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <time datetime="2020-08-11"></time>

        <?php
            echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
            unset($_SESSION['msg']);
        ?>

        <header>
            <a href="index.php"><img src="images/logo.png" alt="Voltar ao Inicio" title="Voltar ao Inicio"></a>
            <ul class="lado">
                <li><a href="cadastro-de-usuario.php" id="link-cadastro">Cadastrar</a></li>
                <li><a href="login-de-usuario.php" id="link-login">Login</a></li>
            </ul>
        </header>
        <section>
            <h2 style="display: none;">HolaViagens</h2>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="usuarios-cadastrados.php">Buscar Usuários</a></li>
                    <li><a href="#">Pagina 3</a></li>
                </ul>
            </nav>
            
            <fieldset>
                <legend>Cadastro</legend>
                <h3>*Campos Obrigatórios</h3>
                <form method="post" action="control/control-cadastro-de-usuario.php">

                    <input type="text" placeholder="ID" class="cadastrar-input-margem" name="textID">
                    <input type="text" placeholder="Nome Completo" class="cadastrar-input-margem" name="textNomeCompleto">
                    <input type="email" placeholder="Email" class="cadastrar-input-margem" name="emMail">
                    <input type="text" placeholder="Login" class="cadastrar-input-margem" name="textLogin">
                    <input type="password" placeholder="Senha" class="cadastrar-input-margem" name="passSenha">
                    <input type="file" value="Foto">

                    <div class="bt-cadastrar-bt-limpar">
                        <li>
                            <input type="submit" value="Cadasstrar" class="cadastrar-entrar-bt-margem-tb">
                            <input type="reset" value="Limpar Campos" class="limpar-deslogar-bt-margem-tb">
                        </li>
                    </div>

                </form>
            </fieldset>
        </section>
        <footer>
            
        </footer>
    </body>
</html>