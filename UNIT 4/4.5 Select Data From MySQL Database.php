<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

echo "<h2>Student Details</h2>";

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Course: " . $row["course"] . "<br>";
        echo "<hr>";
    }

} else {

    echo "No records found.";

}

mysqli_close($conn);

?>