<?php
require_once "conecta.php";

/* Lógica/Funções para o CRUD de Fabricantes */


// listarFabricantes: usada pela página fabricantes/visualizar.php
function listarFabricantes(PDO $conexao):array {
    $sql = "SELECT * FROM fabricantes ORDER BY nome";

    try {
    /* Preparando o comando SQL ANTES de executar no servidor
    e guardando em memória (Variável consulta ou query) */
    $consulta = $conexao->prepare($sql);

    /* Executando o comando no banco de dados */
    $consulta->execute();

    /* Busca todos os dados provenientes da execução da consulta
    e os transforma em um array associativo */
    return $consulta->fetchALL(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }

    

}


// inserirFabricante: usada pela página fabricantes/inserir.php         
                                                // void indica que não tem retorno
function inserirFabricante(PDO $conexao, string $nomeDoFabricante):void{
    /* :named parameter (parâmetro nomeado)
    Usamos este recurso do PDO para 'reservar' um espaço seguro
    em memória para colocação do dado. Nunca passe de forma direta
    valores para comandos SQL. */
    $sql = "INSERT INTO fabricantes(nome) VALUES(:nome)";

    try {
        $consulta = $conexao->prepare($sql);
        /* bindvalue() -> permite vincular o valor
        do parâmetro á consulta que será executada. É necessário
        indicar qual é o parâmetro (:nome), de onde vem o valor
        ($nomeDoFabricante) e de que tipo ele é (PDO:PARAM_STR) */
        $consulta->bindValue(":nome", $nomeDoFabricante, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao inserir: ".$erro->getMessage());
    }
}


// listarUmFabricante: usada pela página fabricante/atualizar.php
function listarUmFabricante(PDO $conexao, int $idFabricante):array {
    $sql = "SELECT * FROM fabricantes WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $idFabricante, PDO::PARAM_INT);
        $consulta->execute();

        /* Usamos o fetch para garantir o retorno
        de um único array associativo com o resultado */
        return $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar fabricante: ".$erro->getMessage());
    }
}

function atualizarFabricante($conexao, $idFabricante, $nomeDoFabricante): void {
    $sql = "UPDATE fabricantes SET nome = :nome WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindvalue(":nome", $nomeDoFabricante, PDO::PARAM_STR);
        $consulta->bindvalue(":id", $idFabricante, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao atualizar fabricante: ".$erro->getMessage());
    }
}

// ecluirFabricante: usada em fabricantes/excluir.php
function excluirFabricante($conexao, $idFabricante): void {
    $sql = "DELETE FROM fabricantes WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $idFabricante, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao excluir fabricante: ".$erro->getMessage());
    }
}