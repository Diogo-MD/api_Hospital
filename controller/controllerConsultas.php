<?php
include_once("modelConsultas.php");

class controllerConsultas {

    public function listarConsultas() {
        try {
            $modelConsultas = new modelConsultas();
            return $modelConsultas->listarConsultas();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarConsulta($id_prontuario, $id_funcionario_atendimento, $detalhes) {
        try {
            $modelConsultas = new modelConsultas();
            return $modelConsultas->cadastrarConsulta($id_prontuario, $id_funcionario_atendimento, $detalhes);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarConsulta($id_consulta, $id_prontuario, $id_funcionario_atendimento, $detalhes) {
        try {
            $modelConsultas = new modelConsultas();
            return $modelConsultas->atualizarConsultas($id_consulta, $id_prontuario, $id_funcionario_atendimento, $detalhes);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
