<?php
session_start();
define("MDP_HASH", password_hash("secret123", PASSWORD_DEFAULT));

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (password_verify($_POST["password"], MDP_HASH)) {
        $_SESSION["auth"] = true;
        echo "Connecté.";
    }
}
?>
<form method="post">
    <input type="password" name="password" required>
    <button type="submit">Se connecter</button>
</form>
