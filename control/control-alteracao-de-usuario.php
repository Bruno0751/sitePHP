<?php
    session_start();
    ob_start();

    include '../model/usuario.php';
    include '../dao/dao-usuario.php';
    //include 'utl/padronizacao.php';

    $usuario = new Usuario();

    $usuario->idUsuario = $_GET['id'];
    $usuario->nomeCompleto = $_POST['textNomeCompleto'];
    $usuario->email = $_POST['emMail'];
    $usuario->login = $_POST['textLogin'];
    $usuario->senha = $_POST['passSenha'];

    
    $daoUsuario = new DAOUsuario();
    $daoUsuario->alterarUsuario($usuario);
    echo $usuario;
    $_SESSION['msg'] = "Usuario Alterado";
    header("location:../usuarios-cadastrados.php");

    ob_end_flush();