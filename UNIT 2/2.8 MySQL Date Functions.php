<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$date = "2026-08-12";

echo "<h2>MySQL Date Functions</h2>";


// DAYOFWEEK()
$result = mysqli_query(
    $conn,
    "SELECT DAYOFWEEK('$date') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DAYOFWEEK(): " . $row["result"] . "<br>";


// WEEKDAY()
$result = mysqli_query(
    $conn,
    "SELECT WEEKDAY('$date') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "WEEKDAY(): " . $row["result"] . "<br>";


// DAYOFMONTH()
$result = mysqli_query(
    $conn,
    "SELECT DAYOFMONTH('$date') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DAYOFMONTH(): " . $row["result"] . "<br>";


// DAYOFYEAR()
$result = mysqli_query(
    $conn,
    "SELECT DAYOFYEAR('$date') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DAYOFYEAR(): " . $row["result"] . "<br>";


// DAYNAME()
$result = mysqli_query(
    $conn,
    "SELECT DAYNAME('$date') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DAYNAME(): " . $row["result"] . "<br>";

mysqli_close($conn);

?>