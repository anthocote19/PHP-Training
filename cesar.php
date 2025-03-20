<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST['message'] ?? '';
    $cle = 3;
    $chiffre = implode('', array_map(fn($c) => ctype_alpha($c) ? chr(((ord($c) + $cle - ($c >= 'a' ? 97 : 65)) % 26) + ($c >= 'a' ? 97 : 65)) : $c, str_split($message)));
    echo "Chiffré : $chiffre";
}
?>
<form method="post">
    <input type="text" name="message" required>
    <button type="submit">Chiffrer</button>
</form>
