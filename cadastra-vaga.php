<?php
    include('cabecalho.php');
?>

    <div class="container">
        <form action="vaga-sucess.php">

            <div class="form-group">
                <label for="">Nome da empresa: </label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Telefone da empresa: </label>
                <input type="tel" class="form-control">
            </div>

            <div class="form-group">
                <label for="">E-mail da empresa: </label>
                <input type="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Nome da vaga: </label>
                <input type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Descrição da vaga: </label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>