<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pt';
}
require_once __DIR__ . "/lang/" . $_SESSION['lang'] . ".php";
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kuromi</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/dark-mode.css" id="dark-mode-css" disabled />
    <link rel="stylesheet" href="assets/css/daltonismo-prot.css" id="prot-css" disabled />
    <link rel="stylesheet" href="assets/css/daltonismo-deut.css" id="deut-css" disabled />
    <link rel="stylesheet" href="assets/css/daltonismo-trit.css" id="trit-css" disabled />
</head>
<body>
    <div class="personagem-container">
        <div class="imagem-personagem" style="background-color: #ffffff;">
            <img src="assets/img/personagem2.png" alt="Kuromi" style="width:100%; height:auto;" />
        </div>
        <div class="descricao-personagem" style="background-color: #4B0082; color: #f5f5f5; padding: 2rem;">
            <h1>Kuromi</h1>
            <p><?php echo $lang['kuromi_description'] ?? 'Uma personagem ousada e cheia de atitude, com um toque de travessura.'; ?></p>
            <a href="index.php">&larr; <?php echo $lang['back']; ?></a>
        </div>
    </div>
    <script src="assets/js/accessibility.js"></script>
</body>
</html>