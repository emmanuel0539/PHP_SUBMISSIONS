<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = 1;

$sql = "DELETE FROM students WHERE id = $id";

if (mysqli_query($conn, $sql)) {

    echo "Data deleted successfully.";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>