<?php

class modelProntuarios
{
    public function listarProntuarios()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_prontuarios");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProntuario($descricao)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_prontuarios (descricao)
            VALUES (:descricao)");

            $inserir->bindParam(':descricao', $descricao);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProntuarios($id_prontuario, $descricao) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_prontuarios SET id_prontuario = :id_prontuario, descricao = :descricao WHERE id_prontuario = :id_prontuario");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':id_prontuario', $id_prontuario);
            $atualizar->bindParam(':descricao', $descricao);


            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
