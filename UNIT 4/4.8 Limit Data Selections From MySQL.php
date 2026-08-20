<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students LIMIT 3";

$result = mysqli_query($conn, $sql);

echo "<h2>First 3 Students</h2>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";

    echo "<hr>";
}

mysqli_close($conn);

?>