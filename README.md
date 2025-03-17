# PHP and JavaScript: Variable Manipulation and Conditions Exercises

This project involves manipulating variables in PHP, performing mathematical operations, and using conditions with different messages depending on variable values. You will also learn how to interact with PHP and JavaScript within an HTML page.

## 1. Displaying Information with PHP

### Objective
Create an HTML page with PHP code to display your personal information using variables and concatenation.

### PHP Code:
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
