<?php
include_once("modelProcedimentosExame.php");

class controllerProcedimentosExame {

    public function listarProcedimentosExame() {
        try {
            $modelProcedimentosExame = new modelProcedimentosExame();
            return $modelProcedimentosExame->listarProcedimentosExame();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProcedimentosExames($id_tipo_procedimento) {
        try {
            $modelProcedimentosExame = new modelProcedimentosExame();
            return $modelProcedimentosExame->cadastrarProcedimentosExames($id_tipo_procedimento);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProcedimentosExame($id_procedimentos_exame, $id_tipo_procedimento) {
        try {
            $modelProcedimentosExame = new modelProcedimentosExame();
            return $modelProcedimentosExame->atualizarProcedimentosExame($id_procedimentos_exame, $id_tipo_procedimento);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
