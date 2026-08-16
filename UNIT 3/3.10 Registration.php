<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST["register"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {

        echo "Registration successful!";

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    Email:
    <input type="email" name="email" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    <input type="submit" name="register" value="Register">

</form>

</body>
</html>

<?php

mysqli_close($conn);

?>