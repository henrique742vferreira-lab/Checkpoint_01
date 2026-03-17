<?php
$jogos = [
    "rocketleague" => [
        "nome" => " Rocket League",
        "descricao" => "  Jogo multijogador de futebol com carros, onde duas equipes competem para impulsionar uma bola gigante 
        para o gol adversário usando seus veículos movidos a foguetes, que podem pular e voar para fazer jogadas 
        incríveis, marcando mais gols que o oponente dentro do tempo limite de cinco minutos para vencer a partida.",
        "plataformas" => " PC, Playstation, Xbox, Switch,",
        "lancamento" => " 07/07/2015",
        "faixa_etaria" => " Livre",
        "nota_geral" => " 8.7"
    ],

    "spiderman" => [
        "nome" => " Spider Man",
        "descricao" => " é um jogo de ação e aventura em mundo aberto que coloca você no papel de um Spider-Man experiente em Nova York,
        com combate dinâmico, travessia fluida com teias, acrobacias, e uma história original onde os mundos de Peter Parker e o 
        Homem-Aranha se chocam, enfrentando vilões icônicos do herói.",
        "plataformas" => " PC, Playstation",
        "lancamento" => " 07/09/2018",
        "faixa_etaria" => " 12", 
        "nota_geral" => " 8.7"
    ],

    "minecraft" => [
        "nome" => " Minecraft",
        "descricao" => " Um mundo tridimensional, construa, colete recursos e lute para sobreviver. Com liberdade total
        e sem objetivos fixos, é um dos jogos mais populares da história.",
        "plataformas" => " PC, Playstation, Xbox, Switch, Mobile.",
        "lancamento" => " 17/05/2009",
        "faixa_etaria" => " Livre",
        "nota_geral" => " 9.0"
    ],

    "legosupermarvel" => [
        "nome" => " Lego Marvel Super Heroes",
        "descricao" => " Jogo de ação-aventura aclamado, conhecido por reunir uma vasta gama de personagens do universo Marvel 
        em uma narrativa original e divertida, recheada de quebra-cabeças e humor característico da série LEGO. ",
        "plataformas" => " PC, Playstation, Xbox, Switch",
        "lancamento" => " 22/10/2013",
        "faixa_etaria" => " Livre",
        "nota_geral" => " 8.3"
    ],

    "horizonzerodawn" => [
        "nome" => " Horizon Zero Dawn",
        "descricao" => " Um mundo aberto onde os jogadores controlam Aloy, uma caçadora em mundo pós-apocaliptico dominado por 
        máquinas. Com gráficos incríveis e uma narrativa envolvente, o jogo mistura combate com arco e flecha, exploração e elementos 
        de ficção científica.",
        "plataformas" => " PC, Playstation",
        "lancamento" => " 28/02/2017",
        "faixa_etaria" => " 14",
        "nota_geral" => " 8.9"
    ],

    "stray" => [
        "nome" => " Stray",
        "descricao" => " Controle um gato de rua num mundo pós-apocaliptico, perdido em uma cidade habitada por robôs. Com uma atmosfera 
        única e jogabilidade baseada em exploração, resolução de quebra-cabeças e furtividade, o jogo conquistou o público por sua originalidade.",
        "plataformas" => " PC, Playstation, Xbox",
        "lancamento" => " 19/07/2022",
        "faixa_etaria" => " 10",
        "nota_geral" => " 8.5"
    ],

    "subnautica" => [
        "nome" => " Subnautica",
        "descricao" => " O jogador assume o papel de um sobrevivente cuja nave, a Aurora, cai em um planeta alienígena coberto por um vasto oceano, 
        o 4546B. O objetivo é explorar recifes de corais, trincheiras profundas, campos de lava e sistemas de cavernas para sobreviver, gerenciando 
        oxigênio, fome e sede. O jogo mistura elementos de construção de bases, criação de itens (crafting) e terror psicológico/exploração, com foco 
        na narrativa e no mistério do planeta. ",
        "plataformas" => " PC, Playstation, Xbox, Switch, Mobile",
        "lancamento" => " 23/01/2018",
        "faixa_etaria" => " 10",
        "nota_geral" => " 9.1"
    ],

    "stardewvalley" => [
        "nome" => "Stardew Valley",
        "descricao" => " Cuide de sua própria fazenda, plante, crie animais, se aventure nas cavernas, pesque e se envolva com a comunidade local. 
        Um dos mais bem avaliados jogos indie da atualidade.",
        "plataformas" => " PC, Playstation, Xbox, Switch, Mobile",
        "lancamento" => " 26/02/2016",
        "faixa_etaria" => " Livre",
        "nota_geral" => " 9.1"
    ],

    "amongus" => [
        "nome" => " Among Us",
        "descricao" => " Um jogo de trabalho em equipe e trairagem online ou em rede local para 4 a 15 jogadores... no espaço! Jogue com 4 a 15 jogadores 
        online ou na sua rede Wi-Fi enquanto prepara sua nave para decolar, mas cuidado! Um ou mais jogadores aleatórios da Tripulação são Impostores e 
        estão doidos pra matar geral!",
        "plataformas" => " PC, Playstation, Xbox, Switch, Mobile", 
        "lancamento" => " 15/06/2018",
        "faixa_etaria" => " Livre",
        "nota_geral" => " 8.0"
    ],

    "brawlstars" => [
        "nome" => " Brawl Stars", 
        "descricao" => " Brawl Stars é um sucesso entre o público mobile, com ação e combate multiplayer controle personagens únicos chamados de Brawlers e
        vença as partidas.",
        "plataformas" => " Mobile", 
        "lancamento" => " 12/12/2018",
        "faixa_etaria" => " 10",
        "nota_geral" => " 8.6"
    ]

];
$nome = $_GET['nome'];

if(isset($jogos[$nome])) {
    $jogo = $jogos[$nome];
} else {
    echo "Jogo não encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo1.css">
        <link rel="shorcut icon" href="img/logocheck.png">
        <meta charset="UTF-8">
        <title><?php echo $jogo['nome'];?> - Informações</title>
    </head>
    <body class = "<?=$nome?>">
        <div class="container">
            <a href="index.php?pagina=home">Voltar</a>
            <h1 class="titulo"><?php echo $jogo['nome'];?></h1>
            <p><strong>Descrição:</strong><?php echo $jogo['descricao'];?></p>
            <p><strong>Plataformas:</strong><?php echo $jogo['plataformas'];?></p>
            <p><strong>Lançamento:</strong><?php echo $jogo['lancamento'];?></p>
            <p><strong>Faixa Etária:</strong><?php echo $jogo['faixa_etaria'];?></p>
            <p><strong>Nota Geral:</strong><?php echo $jogo['nota_geral'];?></p>
            
            <h2 class="subtitulo">Avaliações</h2>
            <form action="" method="post">
                <input type="hidden" name="jogo" value="<?=$nome?>">


                <label>Comentário</label>
                <textarea name="comentario" required></textarea><br><br>

                <label>Nota:</label>
                <input type="number" name="nota" min="0" max="10" required><br><br>

                <button type="submit">Enviar</button>
            </form>

            <hr>

            <?php if (!empty($avaliacoes) && $avaliacoes->num_rows > 0): ?>
                <?php while ($row = $avaliacoes->fetch_assoc()): ?>
                    <p><strong>Data:</strong> <?= htmlspecialchars($row['data']) ?>
                    <strong>Nota:</strong> <?= htmlspecialchars($row['nota']) ?></p>
                    <p><?= nl2br(htmlspecialchars($row['comentario'])) ?></p>
                    <hr>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Ainda não exite nenhuma avaliação deste jogo</p>
            <?php endif; ?>
        </div>
    </body>
</html>