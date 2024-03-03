<?php

setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE['user'])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value is: " . $_COOKIE['user'];
} else {
    echo "Cookie named 'user' is not set!";
}

setcookie("user", "", time() - 3600, "/");

if(isset($_COOKIE['user'])) {
    echo "<br>Cookie 'user' is still set!";
} else {
    echo "<br>Cookie 'user' is deleted.";
}
?>
