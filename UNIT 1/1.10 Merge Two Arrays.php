<?php

$array1 = [10, 20, 30];

$array2 = [40, 50, 60];

$mergedArray = array_merge($array1, $array2);

echo "First Array:<br>";

foreach ($array1 as $value) {
    echo $value . "<br>";
}

echo "<br>";

echo "Second Array:<br>";

foreach ($array2 as $value) {
    echo $value . "<br>";
}

echo "<br>";

echo "Merged Array:<br>";

foreach ($mergedArray as $value) {
    echo $value . "<br>";
}

?>