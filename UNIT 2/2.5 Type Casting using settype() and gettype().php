<?php

$value = "100";

echo "Original Value: " . $value . "<br>";
echo "Original Type: " . gettype($value) . "<br><br>";

settype($value, "integer");

echo "After Type Casting:<br>";
echo "Value: " . $value . "<br>";
echo "Type: " . gettype($value);

?>