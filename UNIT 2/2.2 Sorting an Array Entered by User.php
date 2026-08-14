<?php

$input = readline("Enter numbers separated by spaces: ");

$array = explode(" ", $input);

sort($array);

echo "Sorted Array:<br>";

foreach ($array as $value) {
    echo $value . " ";
}

?>