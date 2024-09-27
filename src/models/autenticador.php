<?php

    include ('C:\Users\Admin\loginphp\vendor\autoload.php');
    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;
    

    $usuario = $_POST['usuário'];
    $senha = $_POST['senha'];

    $sqlInsert = 'INSERT INTO usuario (usuario, senha) VALUES ("' . $usuario .'","' . $senha . '")';

    $conn = ConnectionFactory::getConnection();
    $conn->exec($sqlInsert);