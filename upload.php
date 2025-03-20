<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fichier"])) {
    $nom_fichier = basename($_FILES["fichier"]["name"]);
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "uploads/" . $nom_fichier);
    echo "Fichier envoyé.";
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" required>
    <button type="submit">Envoyer</button>
</form>
