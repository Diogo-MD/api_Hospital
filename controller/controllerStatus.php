<?php
include_once("modelStatus.php");

class controllerStatus {

    public function listarStatus() {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->listarStatus();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarStatus($descricao) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->cadastrarStatus($descricao);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarStatus($id_status, $descricao) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->atualizarStatus($id_status, $descricao);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
