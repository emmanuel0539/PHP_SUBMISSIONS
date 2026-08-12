<!DOCTYPE html>
<html>
<body>

<h2>Reverse Array</h2>

<form method="post">

    Enter values separated by commas:
    <input type="text" name="numbers">

    <input type="submit" value="Reverse">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["numbers"];

    $numbers = explode(",", $input);

    $numbers = array_reverse($numbers);

    echo "<h3>Reversed Array:</h3>";

    foreach ($numbers as $number) {
        echo trim($number) . "<br>";
    }
}

?>

</body>
</html>