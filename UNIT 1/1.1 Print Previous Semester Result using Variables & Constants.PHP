<?php

define("COLLEGE", "GLS University");

$name = "Emmanuel";
$rollNo = "101";
$subject1 = 75;
$subject2 = 82;
$subject3 = 68;
$subject4 = 80;
$subject5 = 74;

$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$percentage = $total / 5;

echo "<h2>" . COLLEGE . "</h2>";
echo "Student Name: " . $name . "<br>";
echo "Roll Number: " . $rollNo . "<br><br>";

echo "Subject 1: " . $subject1 . "<br>";
echo "Subject 2: " . $subject2 . "<br>";
echo "Subject 3: " . $subject3 . "<br>";
echo "Subject 4: " . $subject4 . "<br>";
echo "Subject 5: " . $subject5 . "<br><br>";

echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%";

?>