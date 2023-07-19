<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello</h1>

  <!-- Php allows us to use it inside html -->

  <?php
    // echo command is to print anything on the screen

    // we can define constants over here
    define('pi', 3.14);

    echo "This is Ayush from PHP.";

    // We can write all our logics here

    // We can create variablles using $ sign

    $var1 = 34;
    $var2 = 45;

    echo $var1 + $var2;

    // PHP is dynamically typed language

    // operators in php

    // Arithmetic operator
    echo "<br>";
    echo $var1 - $var2;
    // +, -, *, /

    // Assignment operator 
    // =, +=, -=, *=, /=

    // Comparison operator
    echo "<h1>Comparison operator</h1>";
    echo "The value 1==4 is ";
    echo var_dump(1==4);
    echo "<p>The value 1!=4 is </p>";
    echo var_dump(1!=4);
    echo "<br>";
    echo "<p>The value 1>=4 is </p>";
    echo var_dump(1>=4);
    echo "<br>";
    echo "<p>The value 1<=4 is </p>";
    echo var_dump(1<=4);
    echo "<br>";

    // Increment and decrement operator

    echo "<h1>Increment and decrement operator</h1>";

    echo $var1++;
    echo "<br>";

    echo ++$var1;
    echo "<br>";

    echo $var1--;
    echo "<br>";

    echo --$var1;
    echo "<br>";

    echo "<h1>Logical operator</h1>";
    // and, or, xor, not
    $myVar = (true and true);
    echo var_dump($myVar);

    // xor
    $myXor = (true xor false);
    echo "<br>";
    echo $myXor;

    // data types
    // 1. string
    // 2. integer
    // 3. float
    // 4. bool
    // 5. array
    // 6. obj

    echo "<br>";
    $myStr = "This is me";
    echo "<h1>Data types</h1>";
    echo var_dump($myStr);

    echo "<br>";
    $num = 55;
    echo var_dump($num);

    echo "<br>";
    $num = 55.8;
    echo var_dump($num);

    echo "<br>";
    $num = true;
    echo var_dump($num);
    

    // Using constant over here

    $exact = pi * 45;
    echo "<p>The value is </p>";
    echo $exact;

  ?>
</body>
</html>