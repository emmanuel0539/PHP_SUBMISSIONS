<?php

$a = 20;
$b = 10;

echo "<h2>Arithmetic Operators</h2>";

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<h2>Comparison Operators</h2>";

var_dump($a == $b);
echo "<br>";

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

echo "<h2>Logical Operators</h2>";

var_dump($a > 10 && $b < 20);
echo "<br>";

var_dump($a > 30 || $b < 20);
echo "<br>";

echo "<h2>Assignment Operators</h2>";

$c = 10;

$c += 5;

echo "After += : " . $c . "<br>";

$c -= 3;

echo "After -= : " . $c;

?>