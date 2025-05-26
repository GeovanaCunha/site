<?php
// index.php
session_start();

// Define idioma padrão se não existir
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pt';
}

// Troca idioma via GET
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Inclui idioma
require_once __DIR__ . "/lang/" . $_SESSION['lang'] . ".php";
?><!DOCTYPE html><html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Kitty</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-mode.css" id="dark-mode-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-prot.css" id="prot-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-deut.css" id="deut-css" disabled>
    <link rel="stylesheet" href="assets/css/daltonismo-trit.css" id="trit-css" disabled>
</head>
<body>
    <div class="container">
        <aside class="customization">
            <h2><?php echo $lang['accessibility']; ?></h2><!-- Idiomas -->
        <label><?php echo $lang['language']; ?>:</label>
        <select id="language-selector">
            <option value="pt" <?php if ($_SESSION['lang'] == 'pt') echo 'selected'; ?>>Português</option>
            <option value="en" <?php if ($_SESSION['lang'] == 'en') echo 'selected'; ?>>English</option>
            <option value="es" <?php if ($_SESSION['lang'] == 'es') echo 'selected'; ?>>Español</option>
        </select>

        <!-- Modo Claro/Escuro -->
        <label><?php echo $lang['theme']; ?>:</label>
        <button onclick="toggleDarkMode()">Dark/Light</button>

        <!-- Tamanho da Fonte -->
        <label><?php echo $lang['font_size']; ?>:</label>
        <input type="range" id="font-size" min="12" max="24" step="1" value="16">

        <!-- Daltonismo -->
        <label><?php echo $lang['color_blind']; ?>:</label>
        <select id="daltonismo-selector">
            <option value="none"><?php echo $lang['none']; ?></option>
            <option value="prot">Protanopia</option>
            <option value="deut">Deuteranopia</option>
            <option value="trit">Tritanopia</option>
        </select>
    </aside>

    <main class="content">
        <section class="intro">
            <div class="balloon">
                <h1>Hello Kitty</h1>
                <p><?php echo $lang['intro_text']; ?></p>
            </div>
        </section>

        <section class="characters">
            <a href="personagem1.php"><img src="assets/img/personagem1.png" class="circle-button"></a>
            <a href="personagem2.php"><img src="assets/img/personagem2.png" class="circle-button"></a>
            <a href="personagem3.php"><img src="assets/img/personagem3.png" class="circle-button"></a>
            <a href="personagem4.php"><img src="assets/img/personagem4.png" class="circle-button"></a>
        </section>

        <section class="memory-game">
            <iframe src="game.html" width="100%" height="500px" frameborder="0"></iframe>
        </section>
    </main>
</div>

<script src="assets/js/accessibility.js"></script>

</body>
</html>