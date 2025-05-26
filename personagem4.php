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
    <title>Keroppi</title>
    <link rel="stylesheet" href="assets/css/style.css" />
