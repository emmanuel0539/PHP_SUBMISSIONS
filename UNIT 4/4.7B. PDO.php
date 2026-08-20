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

    $sql = "UPDATE students_pdo
            SET name='Updated Student',
                email='updated@example.com',
                course='BCA'
            WHERE id=$id";

    $conn->exec($sql);

    echo "Data updated successfully using PDO.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>