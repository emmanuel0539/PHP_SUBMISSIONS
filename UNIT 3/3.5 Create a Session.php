<?php

session_start();

$_SESSION["username"] = "Emmanuel";
$_SESSION["course"] = "BCA";

echo "Session created successfully.<br><br>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];

?>