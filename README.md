# PHP and JavaScript: Variable Manipulation and Conditions Exercises

This project involves manipulating variables in PHP, performing mathematical operations, and using conditions with different messages depending on variable values. You will also learn how to interact with PHP and JavaScript within an HTML page.  

## 1. Displaying Information with PHP

### Objective 
Create an HTML page with PHP code to display your personal information using variables and concatenation.
 
### PHP Code: 
**DAY 02**
# PHP Project - Utility Functions

This project contains a collection of useful PHP functions for various programming tasks. You'll find functions for string manipulation, mathematical calculations, and code organization using `require` and `include` to reuse elements across multiple pages.

## Table of Contents

1. [FizzBuzz with Function](#fizzbuzz-with-function)
2. [Factorial Calculation](#factorial-calculation)
3. [Fibonacci Sequence Calculation](#fibonacci-sequence-calculation)
4. [Concatenate First and Last Name](#concatenate-first-and-last-name)
5. [Letter Occurrence Count](#letter-occurrence-count)
6. [Caesar Cipher](#caesar-cipher)
7. [File Includes and Reusability](#file-includes-and-reusability)

## FizzBuzz with Function

### Description
Create a function that checks what value should be returned for FizzBuzz. This should reduce the size of your main "fizzbuzz" function. The main function will loop through numbers and use your helper function to determine if the value should be "Fizz", "Buzz", "FizzBuzz", or the number itself.

---

## Factorial Calculation

### Description
Create a function to compute the factorial of a number. There are two ways to do this:
1. Use a recursive method.
2. Optimize the recursive solution.

### Task
- Try to optimize your factorial function.
- Consider the performance of both methods.

---

## Fibonacci Sequence Calculation

### Description
Create a function to compute the Fibonacci sequence. There are two approaches you can use:
1. A recursive approach.
2. An optimized approach using iteration or memoization.

### Task
- Optimize the Fibonacci function.

---

## Concatenate First and Last Name

### Description
Create a function that concatenates the first name and last name of all users in an array.

### Task
- Make sure the function works for an array of users, where each user is represented by an associative array containing `first_name` and `last_name`.

---

## Letter Occurrence Count

### Description
Create a function that counts the occurrence of each letter in a given text.

### Task
- The function should return the count of each letter in the text.
- Display the results in an easy-to-read manner.

---

## Caesar Cipher

### Description
Create a function that allows you to generate a Caesar cipher. You should be able to send a message and get the ciphered message back using a specified shift key.

### Task
- Implement the Caesar cipher with a variable shift.
- The function should work for both uppercase and lowercase letters.

---

## File Includes and Reusability

### Description
Use the `require` and `include` methods to create a website where the header and footer are shared across all pages. You should not copy/paste the content of the header and footer, but rather import them into each page.

### Task
- Organize the code so that reusable components (header, footer, etc.) are included from external files.

### File Organization
- Split your code into different files: one for rendering HTML content, and another for the logic.
- Create a separate file with multiple functions to generate specific HTML components, such as lists. The function should accept an array and return a valid HTML list.

---

## Text Capitalization Function

### Description
Create a function that takes any text and capitalizes each first letter of all words.

### Task
- Allow the user to pass specific rules:
  - Should all letters be capitalized, or only 1 word over 2?
  - Should it only capitalize the first letter of each word?
  - Optionally, randomly change the capitalization of all letters.

```php
<?php
  $firstname = "Anthony";
  $lastname = "Cote";
  $age = 18;
  $size = 1.75;
  $zipcode = "69000";
  
  echo "My first name and last name: " . $firstname . " " . $lastname . "<br>";
  echo "My age: " . $age . "<br>";
  echo "My height in meters: " . $size . "<br>";
  echo "My zip code: " . $zipcode . "<br>";
?>

