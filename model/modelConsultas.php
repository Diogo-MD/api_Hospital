<?php

class modelConsultas
{
    public function listarConsultas()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_consultas");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarConsulta($id_prontuario, $id_funcionario_atendimento, $detalhes)
    {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_cargos (id_prontuario, id_funcionario_atendimento, detalhes)
            VALUES (:id_prontuario, :id_funcionario_atendimento, :detalhes)");

            $inserir->bindParam(':id_prontuario', $id_prontuario);
            $inserir->bindParam(':id_funcionario_atendimento', $id_funcionario_atendimento);
            $inserir->bindParam(':detalhes', $detalhes);

            $inserir->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarConsultas($id_consulta, $id_prontuario, $id_funcionario_atendimento, $detalhes) {
        try {
            $pdo = Database::conexao();
            $sql = ("UPDATE tbl_consultas SET id_consulta = :id_consulta, id_prontuario = :id_prontuario, id_funcionario_atendimento = :id_funcionario_atendimento, detalhes = :detalhes WHERE id_consulta = :id_consulta");
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':id_consulta', $id_consulta);
            $atualizar->bindParam(':id_prontuario', $id_prontuario);
            $atualizar->bindParam(':id_funcionario_atendimento', $id_funcionario_atendimento);
            $atualizar->bindParam(':detalhes', $detalhes);

            $atualizar->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
