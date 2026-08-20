<?php

try {

    $conn = new PDO(
        "mysql:host=localhost;dbname=php_practical",
        "root",
        ""
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $id = 1;

    $sql = "DELETE FROM students_pdo WHERE id = $id";

    $conn->exec($sql);

    echo "Data deleted successfully using PDO.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>