<?php

    include ('C:\Users\Admin\loginphp\vendor\autoload.php');
    use APP\models\Usuario;

    

    $usuario = $_POST['usuário'];
    $senha = $_POST['senha'];

    $usuarioo = new Usuario($usuario, $senha);

if ($usuario == "admin" && $senha == "admin123"){ 
    echo "<script>alert('Login com sucesso')</script>";
}else { 
    echo "<script>alert('Usuário ou senha incorretos')</script>";
}

var_dump($usuarioo);
?>