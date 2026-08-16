<?php

// 1. array_change_key_case()
$months = [
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30
];

echo "<h3>1. array_change_key_case()</h3>";

$lowerCase = array_change_key_case($months, CASE_LOWER);

print_r($lowerCase);


// 2. array_chunk()
echo "<h3>2. array_chunk()</h3>";

$allMonths = [
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
];

$chunks = array_chunk($allMonths, 3);

print_r($chunks);


// 3. array_count_values()
echo "<h3>3. array_count_values()</h3>";

$colors = ["red", "blue", "red", "green", "blue", "red"];

$count = array_count_values($colors);

print_r($count);


// 4. array_pop()
echo "<h3>4. array_pop()</h3>";

$numbers = [10, 20, 30, 40];

$removed = array_pop($numbers);

echo "Removed value: " . $removed . "<br>";

print_r($numbers);


// 5. array_push()
echo "<h3>5. array_push()</h3>";

array_push($numbers, 50, 60);

print_r($numbers);


// 6. array_unshift()
echo "<h3>6. array_unshift()</h3>";

array_unshift($numbers, 5);

print_r($numbers);


// 7. array_shift()
echo "<h3>7. array_shift()</h3>";

$removedFirst = array_shift($numbers);

echo "Removed value: " . $removedFirst . "<br>";

print_r($numbers);

?>