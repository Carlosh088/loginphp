<?php

    include ('C:\Users\Admin\atvphp\vendor\autoload.php');

    use APP\models\Usuario;

    

    $usuário = $_POST ['usuário'];
    $senha = $_POST ['senha'];

    $usuário = new Usuario($usuário, $senha);

if ($usuário == "admin" && $senha == "admin123"){ 
    echo "<script>alert('Login com sucesso')</script>";
} else { 
    echo "<script>alert('Usuário ou senha incorretos')</script>";
}

?>