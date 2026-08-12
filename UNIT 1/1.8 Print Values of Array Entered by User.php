<!DOCTYPE html>
<html>
<body>

<h2>Enter Array Values</h2>

<form method="post">

    Enter numbers separated by commas:
    <input type="text" name="numbers">

    <input type="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["numbers"];

    $numbers = explode(",", $input);

    echo "<h3>Array Values:</h3>";

    foreach ($numbers as $number) {
        echo trim($number) . "<br>";
    }
}

?>

</body>
</html>