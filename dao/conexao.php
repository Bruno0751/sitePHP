<?php
  class Conexao extends PDO{

    private static $inst = null;

    public function __construct($bd,$user,$pass){
      parent::__construct($bd,$user,$pass);
    }

    public static function getInstance(){
      try{
        if(!isset(self::$inst)){
          self::$inst = new Conexao("mysql:dbname=hola_viajens;host=localhost","root","");
        }
        return self::$inst;
      }catch(PDOException $erro){
        echo "Erro ao Conectar Com o Banco ".$erro;
      }
    }
  }
