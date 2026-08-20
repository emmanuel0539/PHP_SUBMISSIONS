<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = 1;
$name = "Emmanuel Updated";
$email = "updated@example.com";
$course = "BCA";

$sql = "UPDATE students
        SET name='$name',
            email='$email',
            course='$course'
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {

    echo "Data updated successfully.";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>