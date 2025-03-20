<?php
session_start();
if (isset($_POST["pseudo"])) {
    setcookie("pseudo", $_POST["pseudo"], time() + 3600 * 24 * 30);
    $_SESSION["pseudo"] = $_POST["pseudo"];
}
?>
<form method="post">
    <input type="text" name="pseudo" required>
    <button type="submit">Se souvenir</button>
</form>
