<?php
    include('cabecalho.php');
?>
        <div class="container">
            <form action="">
                <fieldset>
                    <legend class="legend">Formulario de cadastro</legend>

                    <div class="form-group">
                        <label for="name">Nome: </label>
                        <input type="text" class="form-control" id="name" placeholder="Digite seu nome">
                    </div>

                    <div class="form-group">
                        <label for="tel">Telefone: </label>
                        <input type="tel" class="form-control" id="tel" placeholder="Digite seu telefone">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF: </label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite seu cpf">
                    </div>

                    <div class="form-group">
                        <label for="user">Usuario: </label>
                        <input type="text" class="form-control" id="user" placeholder="Digite seu usuario">
                    </div>

                    <div class="form-group">
                        <label for="password">Senha: </label>
                        <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                    </div>

                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </fieldset>
            </form>
        </div >
    </body>
</html?