<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$datetime = "2026-08-12 14:35:45";

echo "<h2>MySQL Time Functions</h2>";


// HOUR()
$result = mysqli_query(
    $conn,
    "SELECT HOUR('$datetime') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "HOUR(): " . $row["result"] . "<br>";


// MINUTE()
$result = mysqli_query(
    $conn,
    "SELECT MINUTE('$datetime') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "MINUTE(): " . $row["result"] . "<br>";


// SECOND()
$result = mysqli_query(
    $conn,
    "SELECT SECOND('$datetime') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "SECOND(): " . $row["result"] . "<br>";


// DATE_FORMAT()
$result = mysqli_query(
    $conn,
    "SELECT DATE_FORMAT('$datetime', '%d-%m-%Y %H:%i:%s') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DATE_FORMAT(): " . $row["result"] . "<br>";


// DATE_SUB()
$result = mysqli_query(
    $conn,
    "SELECT DATE_SUB('$datetime', INTERVAL 7 DAY) AS result"
);

$row = mysqli_fetch_assoc($result);

echo "DATE_SUB(): " . $row["result"] . "<br>";

mysqli_close($conn);

?>s