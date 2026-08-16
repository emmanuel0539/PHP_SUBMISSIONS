<?php

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"])) {

        setcookie("remember_username", $username, time() + 3600);
        setcookie("remember_password", $password, time() + 3600);

    }

    echo "Login successful!";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

    Username:

    <input
        type="text"
        name="username"
        value="<?php echo isset($_COOKIE["remember_username"]) ? $_COOKIE["remember_username"] : ""; ?>"
        required
    >

    <br><br>

    Password:

    <input
        type="password"
        name="password"
        value="<?php echo isset($_COOKIE["remember_password"]) ? $_COOKIE["remember_password"] : ""; ?>"
        required
    >

    <br><br>

    <input type="checkbox" name="remember">

    Remember Me

    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>