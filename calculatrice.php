<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $operation = $_POST['operation'] ?? '';
    $nombres = array_filter($_POST['nombres'], fn($n) => is_numeric($n));
    if (count($nombres) < 2) exit;

    $result = array_shift($nombres);
    foreach ($nombres as $nombre) {
        if ($operation === "add") $result += $nombre;
        elseif ($operation === "subtract") $result -= $nombre;
        elseif ($operation === "multiply") $result *= $nombre;
        elseif ($operation === "divide" && $nombre != 0) $result /= $nombre;
    }
    echo "Résultat : $result";
}
?>
<form method="post">
    <input type="text" name="nombres[]" required>
    <input type="text" name="nombres[]" required>
    <select name="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">×</option>
        <option value="divide">÷</option>
    </select>
    <button type="submit">Calculer</button>
</form>
