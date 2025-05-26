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

