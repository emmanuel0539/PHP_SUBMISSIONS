<?php

session_start();

if (!isset($_SESSION["username"])) {

    header("Location: Login.php");
    exit();

}

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {
    die("Database connection failed.");
}

$username = $_SESSION["username"];


// Update profile
if (isset($_POST["update"])) {

    $email = $_POST["email"];

    $sql = "UPDATE users
            SET email='$email'
            WHERE username='$username'";

    if (mysqli_query($conn, $sql)) {

        echo "Profile updated successfully.";

    } else {

        echo "Error updating profile.";

    }
}


// Get existing details
$sql = "SELECT * FROM users
        WHERE username='$username'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form method="post">

    Username:

    <input
        type="text"
        value="<?php echo $user["username"]; ?>"
        disabled
    >

    <br><br>

    Email:

    <input
        type="email"
        name="email"
        value="<?php echo $user["email"]; ?>"
        required
    >

    <br><br>

    <input
        type="submit"
        name="update"
        value="Update Profile"
    >

</form>

</body>
</html>

<?php

mysqli_close($conn);

?>