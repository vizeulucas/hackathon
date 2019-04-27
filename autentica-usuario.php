<?php
    include("conexao.php");
    $user = $_GET['user'];
    $pass = $_GET['password'];

    $newURL = "painel-usuario.php";

    if(mysqli_query($conexao, "SELECT user, senha FROM users WHERE user = '{$user}' AND senha = '{$pass}';")) {
        header('Location: '.$newURL);
    }
    
?>
