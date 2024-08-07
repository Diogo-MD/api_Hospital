<?php

class modelStatus
{
    public function listarStatus()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_status");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarStatus($descricao)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_status (descricao)
            VALUES (:descricao)");

            $inserir->bindParam(':descricao', $descricao);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarStatus($id_status, $descricao) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_status SET id_status = :id_status, descricao = :descricao WHERE id_status = :id_status");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':id_status', $id_status);
            $atualizar->bindParam(':descricao', $descricao);

            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}