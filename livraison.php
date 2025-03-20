<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (preg_match("/^[a-zA-ZÀ-ÿ\s-]+$/", $_POST["nom"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && preg_match("/^\+?\d{10,15}$/", $_POST["telephone"])) {
        echo "Livraison validée.";
    }
}
?>
<form method="post">
    <input type="text" name="nom" required>
    <input type="email" name="email" required>
    <input type="text" name="telephone" required>
    <button type="submit">Envoyer</button>
</form>
