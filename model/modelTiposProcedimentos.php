<?php

class modelTiposProcedimentos
{
    public function listarTiposProcedimentos()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_tipos_procedimento");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarTiposProcedimento($descricao_procedimento)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_tipos_procedimento (descricao_procedimento)
            VALUES (:descricao_procedimento)");

            $inserir->bindParam(':descricao_procedimento', $descricao_procedimento);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarStatus($id_tipos_procedimento, $descricao_procedimento) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_tipos_procedimento SET id_tipos_procedimento = :id_tipos_procedimento, descricao_procedimento = :descricao_procedimento WHERE id_tipos_procedimento = :id_tipos_procedimento");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':id_tipos_procedimento', $id_tipos_procedimento);
            $atualizar->bindParam(':descricao_procedimento', $descricao_procedimento);

            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}