<?php
require_once __DIR__ . '/../src/Controller/AvaliacaoController.php';

$pagina = $_GET['pagina'] ?? 'home';

switch ($pagina) {
    case 'avaliacao':
        $nome = $_GET['nome'] ?? null;
        if (!$nome) {
            echo "Jogo não especificado.";
            exit;
        }

        $controller = new AvaliacaoController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comentario = $_POST['comentario'];
            $nota = $_POST['nota'];
            $controller->salvar($comentario, $nota, $nome);
        }

        $avaliacoes =$controller->listarAvaliacoes($nome);

        include __DIR__ . '/../src/View/avaliacao.php';
        break;

    case 'home':
        include __DIR__ . '/../src/View/index.html';
        break;

    case 'login':
        include __DIR__ . '/../src/View/formlogin.html';
        break;

    case 'cadastro':
        include __DIR__ . '/../src/View/cadastro.php';
        break;
}
?>