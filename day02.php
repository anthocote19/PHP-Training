<?php

// =============================
// 1. FizzBuzz with Function
// =============================

function checkFizzBuzz($num) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        return "FizzBuzz";
    } elseif ($num % 3 == 0) {
        return "Fizz";
    } elseif ($num % 5 == 0) {
        return "Buzz";
    } else {
        return $num;
    }
}

// Example usage of FizzBuzz
for ($i = 1; $i <= 20; $i++) {
    echo checkFizzBuzz($i) . "\n";
}

echo "\n\n"; // Separate each exercise output


// =============================
// 2. Factorial Calculation
// =============================

// Recursive Factorial
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Optimized Factorial
function optimizedFactorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Example usage of Factorial
echo "Factorial of 5 (Recursive): " . factorial(5) . "\n";
echo "Factorial of 5 (Optimized): " . optimizedFactorial(5) . "\n";

echo "\n\n"; // Separate each exercise output


// =============================
// 3. Fibonacci Sequence Calculation
// =============================

// Recursive Fibonacci
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Optimized Fibonacci (Memoization)
function optimizedFibonacci($n, &$memo = []) {
    if ($n <= 1) {
        return $n;
    }
    if (!isset($memo[$n])) {
        $memo[$n] = optimizedFibonacci($n - 1, $memo) + optimizedFibonacci($n - 2, $memo);
    }
    return $memo[$n];
}

// Example usage of Fibonacci
echo "Fibonacci of 10 (Recursive): " . fibonacci(10) . "\n";
echo "Fibonacci of 10 (Optimized): " . optimizedFibonacci(10) . "\n";

echo "\n\n"; // Separate each exercise output


// =============================
// 4. Concatenate First and Last Name
// =============================

function concatenateNames($users) {
    $result = [];
    foreach ($users as $user) {
        $result[] = $user['first_name'] . ' ' . $user['last_name'];
    }
    return $result;
}

// Example usage of Concatenate Names
$users = [
    ['first_name' => 'John', 'last_name' => 'Doe'],
    ['first_name' => 'Jane', 'last_name' => 'Smith']
];
echo "Concatenated Names: \n";
print_r(concatenateNames($users));

echo "\n\n"; // Separate each exercise output


// =============================
// 5. Letter Occurrence Count
// =============================

function countLetterOccurrences($text) {
    $letters = count_chars($text, 1);
    foreach ($letters as $char => $count) {
        echo chr($char) . ': ' . $count . "\n";
    }
}

// Example usage of Letter Occurrence Count
echo "Letter Occurrence Count:\n";
countLetterOccurrences('Hello World!');

echo "\n\n"; // Separate each exercise output


// =============================
// 6. Caesar Cipher
// =============================

function caesarCipher($text, $shift) {
    $result = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $asciiOffset = ctype_lower($char) ? 97 : 65;
            $result .= chr((ord($char) - $asciiOffset + $shift) % 26 + $asciiOffset);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Example usage of Caesar Cipher
echo "Caesar Cipher (Shift 3):\n";
echo caesarCipher('Hello World!', 3) . "\n";

echo "\n\n"; // Separate each exercise output


// =============================
// 7. File Includes and Reusability
// =============================

// For this exercise, we can split the code into multiple PHP files.
// Assuming you want to include a header and footer, you'd create separate PHP files for the header and footer content.

?>

<!-- Include header -->
<?php include 'header.php'; ?>

<h1>Welcome to My Website</h1>
<p>This is the content of the page.</p>

<!-- Include footer -->
<?php include 'footer.php'; ?>

<?php
// Example header.php
/*
<?php
echo "<header><h2>My Website Header</h2></header>";
?>
*/

// Example footer.php
/*
<?php
echo "<footer><p>&copy; 2025 My Website</p></footer>";
?>
*/

?>

