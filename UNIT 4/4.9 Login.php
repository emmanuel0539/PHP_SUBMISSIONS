<?php

session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {
    die("Database connection failed.");
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users
            WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user["password"])) {

            $_SESSION["username"] = $user["username"];

            header("Location: home.php");
            exit();

        } else {

            $error = "Invalid password.";

        }

    } else {

        $error = "User not found.";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>

<h2>Login Form</h2>

<?php

if (isset($error)) {
    echo "<p>$error</p>";
}

?>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>