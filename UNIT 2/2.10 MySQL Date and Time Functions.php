<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2>MySQL Date and Time Functions</h2>";


// 1. CURDATE() / CURRENT_DATE
$result = mysqli_query($conn, "SELECT CURDATE() AS result");
$row = mysqli_fetch_assoc($result);

echo "1. CURDATE(): " . $row["result"] . "<br>";

$result = mysqli_query($conn, "SELECT CURRENT_DATE AS result");
$row = mysqli_fetch_assoc($result);

echo "CURRENT_DATE: " . $row["result"] . "<br><br>";


// 2. CURTIME() / CURRENT_TIME()
$result = mysqli_query($conn, "SELECT CURTIME() AS result");
$row = mysqli_fetch_assoc($result);

echo "2. CURTIME(): " . $row["result"] . "<br>";

$result = mysqli_query($conn, "SELECT CURRENT_TIME() AS result");
$row = mysqli_fetch_assoc($result);

echo "CURRENT_TIME(): " . $row["result"] . "<br><br>";


// 3. UNIX_TIMESTAMP()
$result = mysqli_query($conn, "SELECT UNIX_TIMESTAMP() AS result");
$row = mysqli_fetch_assoc($result);

echo "3. UNIX_TIMESTAMP(): " . $row["result"] . "<br><br>";


// 4. FROM_UNIXTIME()
$result = mysqli_query(
    $conn,
    "SELECT FROM_UNIXTIME(UNIX_TIMESTAMP()) AS result"
);

$row = mysqli_fetch_assoc($result);

echo "4. FROM_UNIXTIME(): " . $row["result"] . "<br>";


mysqli_close($conn);

?>