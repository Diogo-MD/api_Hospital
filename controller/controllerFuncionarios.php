<?php
include_once("modelFuncionarios.php");

class controllerFuncionarios {

    public function listarFuncionarios() {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->listarFuncionarios();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarFuncionario($nome, $sobrenome, $id_cargo, $id_status) {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->cadastrarFuncionario($nome, $sobrenome, $id_cargo, $id_status);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarFuncionario($id_funcionario, $nome, $sobrenome, $id_cargo, $id_status) {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->atualizarFuncionarios($id_funcionario, $nome, $sobrenome, $id_cargo, $id_status);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
