<?php

class modelCargos
{
    public function listarCargos()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_cargos");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarCargos($descricao_cargo)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_cargos (descricao_cargo)
            VALUES (:descricao)");

            $inserir->bindParam(':descricao', $descricao_cargo);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarCargos($id_cargo, $descricao) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_cargos SET id_cargo = :id_cargo, descricao_cargo = :descricao_cargo WHERE id_cargo = :id_cargo");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':descricao_cargo', $descricao_cargo);

            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
