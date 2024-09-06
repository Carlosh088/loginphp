<?php
 namespace APP\models;

  class Usuario{
    private $usuario;
    private $senha;

    function __construct ($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
  }



    
