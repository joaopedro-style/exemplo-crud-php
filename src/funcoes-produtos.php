<?php
require_once "conecta.php";

function listarProdutos(PDO $conexao):array {
    $sql = "SELECT * FROM produtos";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar produtos: ".$erro->getMessage());
    }
}