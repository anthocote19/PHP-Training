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

# PHP Web Forms, Security, Sessions & Cookies Project

This project contains several PHP exercises demonstrating the use of **HTTP requests, validation, authentication, sessions, cookies, and file handling**. It provides a hands-on approach to mastering **form handling, security measures, and user data persistence**.

## 📌 Features

### 1. Forms Handling

#### 🟢 FizzBuzz with Custom Range
- Users can define the **start** and **end numbers**.
- The request is handled via **GET or POST**.
- Only valid values (**numbers > 0**) are accepted.

#### 🟢 Multi-Operation Calculator
- Supports **addition, subtraction, multiplication, and division**.
- Allows **more than two numbers**.
- Handles errors for **invalid values (letters, empty fields, non-numeric input)**.

#### 🟢 Caesar Cipher Form
- Users can enter a **message**, which is then **encrypted using the Caesar cipher method**.

#### 🟢 File Upload
- Users can upload a **file** via an HTML form.
- The uploaded file is stored on the **server**.

---

### 2. Security Measures

#### 🔴 Complex Delivery Form
- Includes **name, address, phone number, and email validation**.
- Ensures that:
  - Names contain **only Latin characters**.
  - Addresses are **valid French addresses**.
  - Emails and phone numbers follow **proper formats**.

#### 🔴 Secure Login with Hashed Passwords
- Users can **access content only with valid login credentials**.
- Passwords are **hashed** (never stored in plain text).

#### 🔴 JSON API Response
- Uses **json_encode()** to return data in **JSON format**.
- The frontend can retrieve this data using **AJAX or Fetch API**.

---

### 3. Sessions & Cookies

#### 🔵 Persistent Username with Cookies
- Stores the **username in a cookie**.
- Greets the user when they revisit the page.

#### 🔵 Fake Login Counter
- Each login attempt **increments a session-based counter**.
- Displays the total number of logins.

#### 🔵 "Remember Me" Feature
- If a session is invalid, it retrieves **user data from cookies**.
- Provides an option to store login details for **automatic re-authentication**.

---

### 4. File Handling

#### 🟠 Multiple File Upload
- Users can upload **two documents**.
- Files are **renamed** before storage.
- Users can **download their uploaded files**.

---

##  Installation & Usage

1. **Install a local server** (XAMPP, WAMP, MAMP).
2. **Clone or copy** the project into your server’s root folder:
   - XAMPP: `htdocs/your_project/`
   - WAMP: `www/your_project/`
3. **Start Apache and PHP** on your local server.
4. Access the project in your browser via:

 5. Open individual pages:
- **FizzBuzz** → `http://localhost/your_project/fizzbuzz.php`
- **Calculator** → `http://localhost/your_project/calculatrice.php`
- **Caesar Cipher** → `http://localhost/your_project/cesar.php`
- **File Upload** → `http://localhost/your_project/upload.php`
- **Secure Login** → `http://localhost/your_project/login.php`
- **API JSON Response** → `http://localhost/your_project/api.php`
- **Cookies & Sessions** → `http://localhost/your_project/cookie.php`
- **File Listing** → `http://localhost/your_project/list_files.php`

---

## 🛠 Technologies Used

- **PHP** (Core backend logic)
- **HTML & CSS** (Frontend structure)
- **JavaScript (AJAX & Fetch API)** (For JSON requests)
- **Sessions & Cookies** (User authentication & persistence)
- **File Handling** (Uploading & retrieving files)

---

## 🔒 Security Considerations

- **Input Validation**: Ensures **only valid data** is processed.
- **Password Hashing**: Protects **stored credentials**.
- **Sanitized Queries**: Prevents **injections & XSS attacks**.
- **Session Handling**: Manages **user authentication securely**.

---

## 📜 License

This project is open-source and available for educational purposes.

---

## 📧 Contact

For any issues or improvements, feel free to contact **[Your Name]**.

