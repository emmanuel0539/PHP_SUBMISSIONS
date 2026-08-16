<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];

    setcookie("username", $username, time() + 3600);

    header("Location: welcome.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Header</title>
</head>
<body>

<h2>Login</h2>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="submit" value="Login">

</form>

</body>
</html>