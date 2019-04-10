    <?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// TA BORT INLOGGNINGEN
unset($_SESSION['login']);
// SKICKAS VIDARE TILL INDEX.PHP
header("Location: index.php");
?>