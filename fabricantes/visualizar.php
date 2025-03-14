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
            <caption>Lista de Fabricantes</caption>
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> Identificador do fabricante 1... </td>
                    <td> Nome do fabricante 1... </td>
                </tr>
                <tr>
                    <td> Identificador do fabricante 2... </td>
                    <td> Nome do fabricante 2... </td>
                </tr>
                <tr>
                    <td> Identificador do fabricante 3... </td>
                    <td> Nome do fabricante 3... </td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>