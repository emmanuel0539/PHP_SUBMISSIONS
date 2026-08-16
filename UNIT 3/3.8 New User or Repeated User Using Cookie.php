<?php

if (isset($_COOKIE["visitor"])) {

    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated visitor.";

} else {

    setcookie("visitor", "yes", time() + (86400 * 30));

    echo "<h2>Welcome!</h2>";
    echo "You are a new visitor.";

}

?>