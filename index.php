<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercices</title>
</head>
<body>
    <?php
    $firstname = "Anthony";
    $lastname = "Cote";
    $age = 19;
    $size = 1.75;
    $zipcode = "68340";

    echo "<h1>Exercice</h1>";
    echo "<p>Je m'appelle $firstname $lastname, j'ai $age ans, je mesure $size m et mon code postal est $zipcode.</p>";
    
    $booleanValue = (bool) -25;
    $intValue = (int) 12.25;
    $intFromString = (int) "hello 123";
    $stringFromInt = (string) 123;

    echo "<p>Valeur castée en booléen: ".($booleanValue ? "true" : "false")."</p>";
    echo "<p>Valeur float castée en int: $intValue</p>";
    echo "<p>Valeur string castée en int: $intFromString</p>";
    echo "<p>Valeur int castée en string: $stringFromInt</p>";
    
  
    $add = 10 + 5;
    $subtract = 10 - 5;
    $divide = 10 / 2;
    $multiply = 10 * 2;
    $piValue = pi();
    $formattedPi = number_format($piValue, 5);

    echo "<p>Addition: $add</p>";
    echo "<p>Soustraction: $subtract</p>";
    echo "<p>Division: $divide</p>";
    echo "<p>Multiplication: $multiply</p>";
    echo "<p>Valeur de PI: $formattedPi</p>";
    
    
    if ($age >= 18) {
        echo "<p>Bienvenue</p>";
    } else {
        echo "<p>Accès refusé</p>";
    }

    
    $grade = 75;
    if ($grade <= 10) {
        echo "<p>Très insuffisant</p>";
    } elseif ($grade <= 20) {
        echo "<p>Insuffisant</p>";
    } elseif ($grade <= 30) {
        echo "<p>Passable</p>";
    } elseif ($grade <= 40) {
        echo "<p>Moyen</p>";
    } elseif ($grade <= 50) {
        echo "<p>Assez bien</p>";
    } elseif ($grade <= 60) {
        echo "<p>Bien</p>";
    } elseif ($grade <= 70) {
        echo "<p>Très bien</p>";
    } elseif ($grade <= 80) {
        echo "<p>Excellent</p>";
    } elseif ($grade <= 90) {
        echo "<p>Exceptionnel</p>";
    } else {
        echo "<p>Parfait</p>";
    }
    
    
    $graduated = true;
    if ($age > 50 && $graduated) {
        echo "<p>MyLord</p>";
    } elseif ($age > 30 && $graduated) {
        echo "<p>Sir</p>";
    } elseif ($age < 18 && $graduated) {
        echo "<p>Congrats</p>";
    } elseif ($age < 18 && !$graduated) {
        echo "<p>Time to work</p>";
    }
    ?>

    <script>
        let firstname = "<?php echo $firstname; ?>";
        alert("Bonjour " + firstname +"!");
    </script>
</body>
</html>