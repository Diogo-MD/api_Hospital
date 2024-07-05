<?php
include_once("modelProntuarios.php");

class controllerProntuarios {

    public function listarProntuarios() {
        try {
            $modelProntuarios = new modelProntuarios();
            return $modelProntuarios->listarProntuarios();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProntuario($descricao) {
        try {
            $modelProntuarios = new modelProntuarios();
            return $modelProntuarios->cadastrarProntuario($descricao);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProntuario($id_prontuario, $descricao) {
        try {
            $modelProntuarios = new modelProntuarios();
            return $modelProntuarios->atualizarProntuarios($id_prontuario, $descricao);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
