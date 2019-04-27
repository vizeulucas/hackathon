<?php

    $user = $_GET['user']

    $resultado = mysqli_query($conexao, "SELECT user, senha FROM users WHERE ;");

    $usuario