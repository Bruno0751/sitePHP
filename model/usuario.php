<?php
  class Usuario {

    private $idUsuario;
    private $nomeCompleto;
    private $email;
    private $login;
    private $senha;
    

    public function __construct(){}

    public function __destruct(){}

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __toString(){
      return nl2br("Nome : $this->nomeCompleto
                    Email: $this->email
                    Login: $this->login
                    Senha: $this->senha");
    }
  }
