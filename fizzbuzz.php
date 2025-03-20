<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $debut = filter_input(INPUT_POST, 'debut', FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
    $fin = filter_input(INPUT_POST, 'fin', FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
    if ($debut && $fin && $debut < $fin) {
        for ($i = $debut; $i <= $fin; $i++) {
            echo ($i % 3 === 0 ? "Fizz" : "") . ($i % 5 === 0 ? "Buzz" : "") . ($i % 3 !== 0 && $i % 5 !== 0 ? $i : "") . "<br>";
        }
    }
}
?>
<form method="post">
    <input type="number" name="debut" required>
    <input type="number" name="fin" required>
    <button type="submit">Lancer</button>
</form>
