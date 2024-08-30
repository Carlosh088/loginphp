<?php
 namespace APP\models;

  class Usuario{
    private $usuário;
    private $senha;

    function __construct ($usuário, $senha){
        $this->usuário = $_GET['usuário'];
        $this->senha = $_GET['senha'];
    }
  }



    
