<?php
    include("conexao.php");

    function insereUsuario($user, $password, $nome, $email, $tel, $cpf, $ensino, $conexao){
        $query = "insert into users value('{$user}', '{$password}','{$nome}','{$email}', {$tel}, '{$cpf}', '{$ensino}');";
        return mysqli_query($conexao, $query);
    } 

    $nome = $_GET['nome'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $ensino = $_GET['escolaridade'];

    insereUsuario($user, $pass, $nome, $email, $tel, $cpf, $ensino, $conexao);

    include("cabecalho.php");
?>
        <div class="alert alert-success d-flex justify-content-around align-items-center" role="alert" style="margin-top: 1px">
            Cadastro feito com sucesso!
            <button class="btn btn-primary">Ir para o painel</button>
        </div>
    </body>
</html>

    