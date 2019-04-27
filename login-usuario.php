<?php
    include('cabecalho.php');
?>
        <section class="section-login">
            <div class="container container-center login-div">
                <form action="autentica-usuario.php">
                    <legend>Login</legend>

                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <input type="submit" value="Entrar" class="btn btn-primary">
                </form>
            </div>
        </section>

    </body>
</html>