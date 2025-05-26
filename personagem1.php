<?php
// personagem1.php - My Melody
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pt';
}
require_once __DIR__ . "/lang/" . $_SESSION['lang'] . ".php";
?><!DOCTYPE html><html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Melody</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-mode.css" id="dark-mode-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-prot.css" id="prot-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-deut.css" id="deut-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-trit.css" id="trit-css" disabled>
</head>
<body>
    <div class="personagem-container">
        <div class="imagem-personagem" style="background-color: #ffffff;">
            <img src="assets/img/personagem1.png" alt="My Melody" style="width: 100%; height: auto;">
        </div>
        <div class="descricao-personagem" style="background-color: #f9cce3; color: #333; padding: 2rem;">
            <h1>My Melody</h1>
            <p><?php echo $lang['my_melody_description'] ?? 'Uma coelhinha doce e gentil que adora fazer doces e passar o tempo com seus amigos.'; ?></p>
            <a href="index.php">&larr; <?php echo $lang['back']; ?></a>
        </div>
    </div>
    <script src="assets/js/accessibility.js"></script>
</body>
</html>