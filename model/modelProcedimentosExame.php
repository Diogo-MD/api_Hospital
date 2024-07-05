<?php

class modelProcedimentosExame
{
    public function listarProcedimentosExame()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_procedimentos_exame");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProcedimentosExames($id_tipo_procedimento)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_procedimentos_exame (id_tipo_procedimento)
            VALUES (:id_tipo_procedimento)");

            $inserir->bindParam(':id_tipo_procedimento', $id_tipo_procedimento);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProcedimentosExame($id_procedimentos_exame, $id_tipo_procedimento) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_procedimentos_exame SET id_procedimentos_exame = :id_procedimentos_exame, id_tipo_procedimento_cargo = :id_tipo_procedimento_cargo WHERE id_procedimentos_exame = :id_procedimentos_exame");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':id_procedimentos_exame', $id_procedimentos_exame);
            $atualizar->bindParam(':id_tipo_procedimento', $id_tipo_procedimento);

            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}