<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../Model/Avaliacao.php";

class AvaliacaoController {
    private $model;

    public function __construct($conn) {
        $this->model = new Avaliacao($conn);
    }

    public function salvar($comentario, $nota, $jogo) {
        $data = date("d/m/Y");
        return $this->model->inserir($comentario, $nota, $data, $jogo);
    }

    public function listarAvaliacoes($jogo) {
        return $this->model->listarPorJogo($jogo);
    }
}
?>