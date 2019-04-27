<?php
    include("conexao.php");
    $user = $_GET['user'];
    $pass = $_GET['password'];

    $newURL = "index.php";

    if(mysqli_query($conexao, "SELECT user, senha FROM users WHERE user = '{$user}' AND senha = '{$pass}';")) {
        header('Location: '.$newURL);
    }

    
    
?>
