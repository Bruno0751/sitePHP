<?php
    session_start();
    ob_start();

    require_once '../model/usuario.php';
    require_once '../dao/dao-usuario.php';
                //include 'util/seguranca.class.php';
                
    $user = new Usuario();

    $user->login = $_POST['textLogin'];
    $user->senha = $_POST['passSenha'];
                
    $uDAO = new DAOUsuario();
    $usuario = $uDAO->verificarUsuario($user);

    if($usuario == null){
        $_SESSION['msg'] = "Usuario Inválido";
        header("location:../login-de-usuario.php.");
        ob_end_flush();
    }else{
        $_SESSION['privateUser'] = serialize($usuario);
        $_SESSION['msg'] = "Ola";
        header("location:../login-de-usuario.php.");
        ob_end_flush();
    }