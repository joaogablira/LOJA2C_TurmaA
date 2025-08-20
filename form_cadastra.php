<?php
 include_once 'pedaco.php'
?>

    <div class="container">
        <h3>Cadastro de Produtos</h3>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="prco" placeholder="Digite o preço do produto">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="quantidade" placeholder="Digite a quatidade do produto">
            </div>
            <button type="submit" class="btn btn-primary">CADASTRAR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>