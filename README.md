# PHP & JavaScript: Variable Manipulation and Conditions Exercises

This project involves manipulating variables in PHP, performing mathematical operations, and using conditions to display different messages based on variable values. It also includes interactions between PHP and JavaScript within an HTML page.

---

# **Day 01 - Displaying Information with PHP**

## **Objective**  
Create an HTML page containing PHP code to display personal information using variables and concatenation.
  
## **Example PHP Code**  
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

Day 02 - PHP Utility Functions
Objective
This project contains a collection of useful PHP functions for various programming tasks. It includes string manipulation, mathematical calculations, and code organization using require and include to reuse elements across multiple pages.

Table of Contents
1. FizzBuzz with Function
2. Factorial Calculation
3. Fibonacci Sequence Calculation
4. Concatenating First and Last Name
5. Letter Occurrence Count
6. Caesar Cipher
7. File Includes and Reusability
8. Text Capitalization Function
# FizzBuzz with Function
Description
Create a function to determine what value should be returned for FizzBuzz. This function will reduce the size of your main FizzBuzz logic. The main function will loop through numbers and use this helper function to determine whether to return "Fizz", "Buzz", "FizzBuzz", or the number itself.

# Factorial Calculation
Description
Create a function to compute the factorial of a number. There are two ways to do this:

A recursive method.
An optimized recursive solution.
Task
Optimize the factorial function.
Consider the performance of both methods.
# Fibonacci Sequence Calculation
Description
Create a function to compute the Fibonacci sequence. There are two approaches:

A recursive approach.
An optimized approach using iteration or memoization.
Task
Optimize the Fibonacci function.
# Concatenating First and Last Name
Description
Create a function that concatenates the first and last names of all users in an array.

Task
Ensure the function works for an array of users, where each user is represented as an associative array with first_name and last_name.
# Letter Occurrence Count
Description
Create a function that counts the occurrence of each letter in a given text.

Task
The function should return the count of each letter in the text.
Display the results in an easy-to-read format.
# Caesar Cipher
Description
Create a function to generate a Caesar cipher. The function should take a message and return an encrypted version using a specified shift key.

Task
Implement the Caesar cipher with a variable shift.
Ensure the function works for both uppercase and lowercase letters.
# File Includes and Reusability
Description
Use require and include to create a website where the header and footer are shared across all pages. Avoid duplicating code by importing these elements into each page.

Task
Organize the code so that reusable components (header, footer, etc.) are included from external files.
File Organization
Separate files for rendering HTML content and logic.
Create a function that accepts an array and generates a valid HTML list.
# Text Capitalization Function
Description
Create a function that takes any text and capitalizes the first letter of each word.

Task
Allow the user to pass specific rules:
Capitalize all letters or every second word.
Capitalize only the first letter of each word.
Optionally, apply random capitalization to all letters.
