<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = "Rahul";
$email = "rahul@example.com";
$course = "BCA";

$stmt = mysqli_prepare(
    $conn,
    "INSERT INTO students (name, email, course)
     VALUES (?, ?, ?)"
);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $name,
    $email,
    $course
);

if (mysqli_stmt_execute($stmt)) {

    echo "Data inserted successfully using prepared statement.";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>