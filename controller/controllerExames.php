<?php
include_once("modelExames.php");

class controllerExames {

    public function listarExames() {
        try {
            $modelExames = new modelExames();
            return $modelExames->listarExames();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarExame($id_prontuario, $id_funcionario_solicitante, $id_procedimentos_exame, $data_solicitacao) {
        try {
            $modelExames = new modelExames();
            return $modelExames->cadastrarExame($id_prontuario, $id_funcionario_solicitante, $id_procedimentos_exame, $data_solicitacao);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarExame($id_exame, $id_prontuario, $id_funcionario_solicitante, $id_procedimentos_exame, $data_solicitacao) {
        try {
            $modelExames = new modelExames();
            return $modelExames->atualizarExames($id_exame, $id_prontuario, $id_funcionario_solicitante, $id_procedimentos_exame, $data_solicitacao);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
