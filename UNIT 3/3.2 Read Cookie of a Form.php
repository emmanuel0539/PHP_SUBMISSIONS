<?php

if (isset($_COOKIE["username"])) {

    echo "Username stored in cookie: " . $_COOKIE["username"];

} else {

    echo "Cookie does not exist.";

}

?>