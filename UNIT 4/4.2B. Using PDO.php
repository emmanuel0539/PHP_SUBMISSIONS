<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php_practical";

try {

    $conn = new PDO(
        "mysql:host=$servername;dbname=$database",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $sql = "CREATE TABLE students_pdo (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        course VARCHAR(100) NOT NULL
    )";

    $conn->exec($sql);

    echo "Table created successfully using PDO.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>