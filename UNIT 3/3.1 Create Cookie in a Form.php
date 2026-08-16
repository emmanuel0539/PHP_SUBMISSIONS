<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];

    setcookie("username", $username, time() + 3600);

    echo "Cookie created successfully!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">

    Enter Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="submit" value="Create Cookie">

</form>

</body>
</html>