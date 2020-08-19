<?php
    session_start();

    unset($_SESSION['privateUser']);
    $_SESSION['msg'] = "Até Mais";
    header("location:../index.php");