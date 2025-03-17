<?php
/* Acessando as funções de Fabricantes */
require_once "../src/funcoes-fabricantes.php";

/* Chamando a função responsavel por carregar os dados dos Fabricantes */
$listaDeFabricantes = listarFabricantes($conexao);

/* Contando os elementos/registros */
$quantidade = count($listaDeFabricantes);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Visualização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-2 shadow-lg rounded">
        <h1><a class="btn btn-dark btn-lg" href="../index.php">Home</a> Fabricantes | SELECT </h1>

        <hr>
        <h2>Lendo e carregando todos os fabricantes.</h2>

        <p><a class="btn btn-primary btn-sm" href="inserir.php">Inserir novo fabricante</a></p>


        <table class="table table-hover table-bordered w-50">
            <caption>Lista de Fabricantes: <?=$quantidade?> </caption>
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>

<?php foreach($listaDeFabricantes as $fabricante) {?>
                <tr>
                    <td> <?= $fabricante["id"] ?></td>
                    <td> <?= $fabricante["nome"] ?></td>
                    <td>
                        <a href="atualizar.php">Editar</a>
                    </td>
                </tr>
<?php } ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>