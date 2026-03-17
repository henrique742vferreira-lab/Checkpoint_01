<?php
class Avaliacao {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function listarPorJogo($jogo) {
        $sql = "SELECT * FROM Avaliacao WHERE jogo = ? ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $jogo);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function inserir($comentario, $nota, $data, $jogo) {
        $sql = "INSERT INTO Avaliacao (comentario, nota, data, jogo) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $comentario, $nota, $data, $jogo);
        return $stmt->execute();
    }
}
?>