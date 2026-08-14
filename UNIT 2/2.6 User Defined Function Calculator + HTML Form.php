<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">

    Enter First Number:
    <input type="number" name="num1" required>
    <br><br>

    Enter Second Number:
    <input type="number" name="num2" required>
    <br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>

    <br><br>

    <input type="submit" name="calculate" value="Calculate">

</form>

<?php

function calculator($num1, $num2, $operation)
{
    switch ($operation) {

        case "add":
            return $num1 + $num2;

        case "sub":
            return $num1 - $num2;

        case "mul":
            return $num1 * $num2;

        case "div":
            if ($num2 == 0) {
                return "Cannot divide by zero";
            }
            return $num1 / $num2;

        default:
            return "Invalid operation";
    }
}

if (isset($_POST["calculate"])) {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    $result = calculator($num1, $num2, $operation);

    echo "<h3>Result: $result</h3>";
}

?>

</body>
</html>