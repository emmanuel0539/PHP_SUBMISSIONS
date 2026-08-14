<?php

$string = "PHP is a powerful programming language";

echo "String: " . $string . "<br><br>";


// 1. strlen()
echo "1. strlen(): ";
echo strlen($string);
echo "<br>";


// 2. strpos()
echo "2. strpos(): ";
echo strpos($string, "powerful");
echo "<br>";


// 3. str_word_count()
echo "3. str_word_count(): ";
echo str_word_count($string);
echo "<br>";


// 4. strrev()
echo "4. strrev(): ";
echo strrev($string);
echo "<br>";


// 5. strtolower()
echo "5. strtolower(): ";
echo strtolower($string);
echo "<br>";


// 6. strtoupper()
echo "6. strtoupper(): ";
echo strtoupper($string);
echo "<br>";

?>