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
        <time datetime="2012-02-15"></time>

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
                    <li><a href="#">Pagina3</a></li>
                </ul>
            </nav>
            <div class="conteudo">
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
                <p>
                    Lorem ipsum non libero at curae eleifend vivamus magna a, nulla iaculis blandit hac vel vitae aenean tristique tellus, non in 
                    cursus velit ornare magna blandit sociosqu. praesent porta convallis vitae aenean vestibulum praesent ante ac, a etiam fusce 
                    convallis mollis risus hac etiam in, interdum est quam litora felis risus luctus. aliquam curabitur nostra dui ac cras neque 
                    tincidunt, posuere curabitur inceptos tincidunt tempus felis libero torquent, aliquet rutrum posuere et a nunc. leo cras nunc ut 
                    mattis habitant ante scelerisque proin vehicula, velit tellus consectetur curabitur conubia mauris neque egestas, orci eleifend 
                    quisque auctor vivamus nostra orci quisque. 
                </p>
            </div>
        </section>
        <footer>
            
        </footer>
    </body>
</html>