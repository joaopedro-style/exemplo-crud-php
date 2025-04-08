<?php
require_once "conecta.php";

function listarProdutos(PDO $conexao):array {
   // $sql = "SELECT * FROM produtos";
   $sql = "SELECT 
                produtos.id, produtos.nome AS produto,
                produtos.preco, produtos.quantidade,
                fabricantes.nome AS fabricante
                FROM produtos INNER JOIN fabricantes
                ON produtos.fabricante_id = fabricantes.id
                ORDER BY produto";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar produtos: ".$erro->getMessage());
    }
}

function listarUmProduto(PDO $conexao, int $idprodutos):array {
    $sql = "SELECT * FROM produtos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $idprodutos, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao atualizar produtos: ".$erro->getMessage());
    }
}



function inserirProduto(
    PDO $conexao, string $nome, float $preco, int $quantidade, int $idfabricante, string $descricao
    ):void {
        $sql = "INSERT INTO produtos(nome, preco, quantidade, fabricante_id, descricao) VALUES(:nome, :preco, :quantidade, :fabricante, :descricao)";

        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
            $consulta->bindValue(":preco", $preco, PDO::PARAM_STR);
            $consulta->bindValue(":quantidade", $quantidade, PDO::PARAM_INT);
            $consulta->bindValue(":fabricante", $idfabricante, PDO::PARAM_INT);
            $consulta->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao inserir produto: ".$erro->getMessage());
        }
    
}

function atualizarProduto(
    PDO $conexao, int $idProduto, string $nomeDoProduto, float $preco, int $quantidade, int $idfabricante, string $descricao
    ): void {
    $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade, fabricante_id = :fabricante, descricao = :descricao
    WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindvalue(":id", $idProduto, PDO::PARAM_INT);
        $consulta->bindvalue(":nome", $nomeDoProduto, PDO::PARAM_STR);
        $consulta->bindValue(":preco", $preco, PDO::PARAM_STR);
        $consulta->bindValue(":quantidade", $quantidade, PDO::PARAM_INT);
        $consulta->bindValue(":fabricante_id", $idfabricante, PDO::PARAM_INT);
        $consulta->bindValue(":descricao", $descricao, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao atualizar produtos: ".$erro->getMessage());
    }
}

function excluirProduto(PDO $conexao, int $idProduto): void {
    $sql = "DELETE FROM produtos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $idProduto, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao excluir produto: ".$erro->getMessage());
    }
}