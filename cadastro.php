<?php
    include('cabecalho.php');
?>

        <div class="container">
            <form action="adiciona-usuarios.php">

                <legend class="legend">Formulario de Cadastro</legend>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="form-group">
                    <label for="tel">tel</label>
                    <input type="text" name="tel" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cpf">cpf</label>
                    <input type="text" name="cpf" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">user</label>
                    <input type="text" name="user" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pass">Nome</label>
                    <input type="password" name="pass" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </body>
</html?