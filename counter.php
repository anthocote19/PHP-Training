<?php
session_start();
$_SESSION["compteur"] = ($_SESSION["compteur"] ?? 0) + 1;
echo "Connexion numéro " . $_SESSION["compteur"];
?>
