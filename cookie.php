<?php
session_start();
if (!isset($_COOKIE["pseudo"])) {
    setcookie("pseudo", "Utilisateur", time() + 3600);
}
echo "Bonjour, " . ($_COOKIE["pseudo"] ?? "visiteur") . "!";
?>
