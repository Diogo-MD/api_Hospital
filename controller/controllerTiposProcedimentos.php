<?php
include_once("modelTiposProcedimentos.php");

class controllerTiposProcedimentos {

    public function listarTiposProcedimentos() {
        try {
            $modelTiposProcedimentos = new modelTiposProcedimentos();
            return $modelTiposProcedimentos->listarTiposProcedimentos();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarTiposProcedimento($descricao_procedimento) {
        try {
            $modelTiposProcedimentos = new modelTiposProcedimentos();
            return $modelTiposProcedimentos->cadastrarTiposProcedimento($descricao_procedimento);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarTiposProcedimento($id_tipos_procedimento, $descricao_procedimento) {
        try {
            $modelTiposProcedimentos = new modelTiposProcedimentos();
            return $modelTiposProcedimentos->atualizarStatus($id_tipos_procedimento, $descricao_procedimento);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
