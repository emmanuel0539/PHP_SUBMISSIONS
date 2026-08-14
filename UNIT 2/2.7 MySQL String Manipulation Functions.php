<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2>MySQL String Functions</h2>";


// 1. LENGTH()
$result = mysqli_query($conn, "SELECT LENGTH('Hello World') AS result");
$row = mysqli_fetch_assoc($result);

echo "1. LENGTH(): " . $row["result"] . "<br>";


// 2. CONCAT()
$result = mysqli_query(
    $conn,
    "SELECT CONCAT('Hello', ' ', 'World') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "2. CONCAT(): " . $row["result"] . "<br>";


// 3. CONCAT_WS()
$result = mysqli_query(
    $conn,
    "SELECT CONCAT_WS('-', '2026', '08', '12') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "3. CONCAT_WS(): " . $row["result"] . "<br>";


// 4. TRIM()
$result = mysqli_query(
    $conn,
    "SELECT TRIM('   Hello World   ') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "4. TRIM(): " . $row["result"] . "<br>";


// RTRIM()
$result = mysqli_query(
    $conn,
    "SELECT RTRIM('Hello World   ') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "RTRIM(): " . $row["result"] . "<br>";


// LTRIM()
$result = mysqli_query(
    $conn,
    "SELECT LTRIM('   Hello World') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "LTRIM(): " . $row["result"] . "<br>";


// 5. LPAD()
$result = mysqli_query(
    $conn,
    "SELECT LPAD('123', 5, '0') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "5. LPAD(): " . $row["result"] . "<br>";


// RPAD()
$result = mysqli_query(
    $conn,
    "SELECT RPAD('123', 5, '0') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "RPAD(): " . $row["result"] . "<br>";


// 6. LOCATE()
$result = mysqli_query(
    $conn,
    "SELECT LOCATE('World', 'Hello World') AS result"
);

$row = mysqli_fetch_assoc($result);

echo "6. LOCATE(): " . $row["result"] . "<br>";

mysqli_close($conn);

?>