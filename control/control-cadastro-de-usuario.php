<?php
    session_start();
    ob_start();

    include '../dao/dao-usuario.php';
    include '../model/usuario.php';

    $usuario = new Usuario();

    $usuario->idUsuario = $_POST['textID'];
    $usuario->nomeCompleto = $_POST['textNomeCompleto'];
    $usuario->email = $_POST['emMail'];
    $usuario->login = $_POST['textLogin'];
    $usuario->senha = $_POST['passSenha'];
    
    $daoUsuario = new DAOUsuario();
    if($daoUsuario->verificarIDDOUsuario($usuario) != null){

        $_SESSION['msg'] = "ID Inválida";
        header('location:../cadastro-de-usuario.php');
        ob_end_flush();

    }else{

        $daoUsuario->cadastrarUsuario($usuario);

        $_SESSION['msg'] = "Usuario Cadastrado";
        header('location:../cadastro-de-usuario.php');
        ob_end_flush();

    }
              