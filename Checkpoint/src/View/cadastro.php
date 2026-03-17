<?php
$erro = [];
$valor = [
    'idade' => '',
    'email' => '',
    'celular' => ''
];
$sucesso = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $idade = trim($_POST['idade'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $celular = trim($_POST['celular'] ?? '');
    $senha = ($_POST['senha'] ?? '');
    $senha_confirmar = ($_POST['senha_confirmar'] ?? '');

    $valor['idade'] = $idade;
    $valor['email'] = $email;
    $valor['celular'] = $celular;

    switch (true){
        case($idade !== '' && $idade < 0):
            $erro['idade'] = 'Idade Inválida.';
            break;

        case (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $erro['email'] = 'Email Inválido.';
            break;

        case(strlen($celular) < 8 || strlen($celular) > 15):
            $erro['celular'] = 'Celular Inválido (deve ter de 8 a 15 dígitos)';
            break;

        case($senha !== $senha_confirmar):
            $erro['senha_confirmar'] = 'As senhas não são iguais.';
            break;

        default:
            header("Location: index.php?pagina=login");
            exit;

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo3.css">
        <link rel="shorcut icon" href="img/logocheck.png">
        <title>Checkpoint - Cadastro</title>
    </head>
    <body>
        <main class="geral">
            <a class= "voltar" href="index.php?pagina=login">Voltar</a>
            <h1 class="titulo">Cadastro</h1>
            <h2 class="subtitulo">Preencha as informações</h2>
            

            <form action="" method="post" novalidate>
                <label for="usuario">Nome de Usuário:</label>
                <input type="text" name="usuario" id="usuario" required>
                <br>

                <label for="idade">Idade (Opcional):</label>
                <input type="number" name="idade" id="idade" min="0"
                value="<?= htmlspecialchars($valor['idade'])?>">
                <?php if (!empty($erro['idade'])): ?><div class="erro"><?= $erro['idade'] ?></div><?php endif;?>
                <br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required
                value="<?= htmlspecialchars($valor['email'])?>">
                <?php if(!empty($erro['email'])): ?><div class="erro"><?= $erro['email'] ?></div><?php endif;?>
                <br>

                <label for="celular">Celular:</label>
                <input type="tel" name="celular" id="celular" required
                value="<?= htmlspecialchars($valor['celular'])?>">
                <?php if(!empty($erro['celular'])): ?><div class="erro"><?= $erro['celular']?></div><?php endif;?>
                <br>

                <label for="senha">Crie sua senha:</label>
                <input type="password" name="senha" id="senha"required>
                <br>

                <label for="senha_confirmar">Confirme sua senha:</label>
                <input type="password" name="senha_confirmar" id="senha_confirmar" required>
                <?php if(!empty($erro['senha_confirmar'])): ?><div class="erro"><?= $erro['senha_confirmar']?></div><?php endif;?>

                <input type="submit" value="Cadastrar">

            </form>


        </main>
    </body>
</html>