<?php
    session_start();
    ob_start();

    include '../dao/dao-usuario.php';
    include '../model/usuario.php';

    $usuario = new Usuario();

    $usuario->nomeCompleto = $_POST['textNomeCompleto'];
    $usuario->email = $_POST['emMail'];
    $usuario->login = $_POST['textLogin'];
    $usuario->senha = $_POST['passSenha'];
    
    $daoUsuario = new DAOUsuario();
    $daoUsuario->cadastrarUsuario($usuario);

    $_SESSION['msg'] = "Usuario Cadastrado";
    header('location:../dao/dao-usuario.php');
    ob_end_flush();          