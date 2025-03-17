<?php

// 1. Pair / Impair
$target = 20;
for ($i = 0; $i <= $target; $i++) {
    echo "$i est " . ($i % 2 === 0 ? "pair" : "impair") . "\n";
}

// 2. FizzBuzz
$target = 20;
for ($i = 0; $i <= $target; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) echo "fizzbuzz\n";
    elseif ($i % 3 === 0) echo "fizz\n";
    elseif ($i % 5 === 0) echo "buzz\n";
    else echo "$i\n";
}

// 3. Tableau utilisateur
$user = [
    "prenom" => "Jean",
    "nom" => "Dupont",
    "age" => 30,
    "adresse" => [
        "code_postal" => "75001",
        "ville" => "Paris",
        "rue" => "Champs-Élysées"
    ]
];

// 4. Tableau d'utilisateurs
$users = [
    ["id" => 1, "email" => "jean@example.com"] + $user,
    ["id" => 2, "email" => "marie@example.com", "prenom" => "Marie", "nom" => "Curie", "age" => 40, "adresse" => []]
];

// 5. Vérification des valeurs
foreach ($users as $user) {
    foreach ($user as $key => $value) {
        if (empty($value) && $key !== "adresse") echo "$key est vide\n";
    }
}

// 6. Tri de tableau (Bubble, Insertion, Sort)
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
    return $arr;
}

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$testArray = [5, 2, 9, 1, 5, 6];
echo "Tri bubble: " . implode(", ", bubbleSort($testArray)) . "\n";
echo "Tri insertion: " . implode(", ", insertionSort($testArray)) . "\n";
sort($testArray);
echo "Tri natif: " . implode(", ", $testArray) . "\n";

// 7. Performance et filtrage
$hugeArray = array_map(fn() => rand(0, 100), range(1, 100000));
$low = [];
$high = [];
foreach ($hugeArray as $num) {
    if ($num < 50) $low[] = $num;
    else $high[] = $num;
}

// 8. Test sur 1M d'éléments avec tri
$hugeArray = array_map(fn() => rand(0, 100), range(1, 1000000));
sort($hugeArray);
$lowSorted = array_filter($hugeArray, fn($num) => $num < 50);
$highSorted = array_filter($hugeArray, fn($num) => $num >= 50);

?>
