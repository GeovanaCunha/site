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
