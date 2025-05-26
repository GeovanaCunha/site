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
 