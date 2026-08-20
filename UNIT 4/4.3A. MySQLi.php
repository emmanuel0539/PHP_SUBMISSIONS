<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO students (name, email, course)
        VALUES ('Emmanuel', 'emmanuel@example.com', 'BCA')";

if (mysqli_query($conn, $sql)) {

    echo "Data inserted successfully.";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>