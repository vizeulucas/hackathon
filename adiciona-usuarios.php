<?php
    include("conexao.php");

    function insereUsuario($user, $password, $nome, $email, $tel, $cpf, $conexao){
        $query = "insert into users value('{$user}', '{$password}','{$nome}','{$email}', {$tel}, '{$cpf}');";
        return mysqli_query($conexao, $query);
    } 

    $nome = $_GET['nome'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    insereUsuario($user, $pass, $nome, $email, $tel, $cpf, $conexao);

?>
    