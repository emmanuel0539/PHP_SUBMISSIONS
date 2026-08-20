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

    $sql = "INSERT INTO students_pdo
            (name, email, course)
            VALUES
            ('John', 'john@example.com', 'BCA')";

    $conn->exec($sql);

    echo "Data inserted successfully using PDO.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>