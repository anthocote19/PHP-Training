<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fichiers"])) {
    foreach ($_FILES["fichiers"]["name"] as $index => $name) {
        move_uploaded_file($_FILES["fichiers"]["tmp_name"][$index], "uploads/" . uniqid() . "_" . $name);
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fichiers[]" multiple required>
    <button type="submit">Envoyer</button>
</form>
