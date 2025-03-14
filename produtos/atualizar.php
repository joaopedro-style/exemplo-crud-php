<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Atualização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-2 shadow-lg rounded pb-1">
        <h1><a class="btn btn-outline-dark" href="visualizar.php">&lt; Voltar</a> Produtos | SELECT/UPDATE</h1>
        <hr>

        <form action="" method="post" class="w-50">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="preco">Preço:</label>
                <input class="form-control" type="number" min="10" max="10000" step="0.01" name="preco" id="preco" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="quantidade">Quantidade:</label>
                <input class="form-control" type="number" min="1" max="100" name="quantidade" id="quantidade" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="fabricante">Fabricante:</label>
                <select class="form-select" name="fabricante" id="fabricante" required>
                    <option value=""></option>
                    <option value="">Fabricante 1...</option>
                    <option value="">Fabricante 2...</option>
                    <option value="">Fabricante 3...</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="descricao">Descrição:</label> <br>
                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="3"></textarea>
            </div>
            <button class="btn btn-warning" type="submit" name="atualizar">Atualizar produto</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>