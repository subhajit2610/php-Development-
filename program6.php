<?php
function isLowerCase($str) {
    return $str === strtolower($str);
}

// Test the function
$string1 = "hello";
$string2 = "Hello";
$string3 = "HELLO";

echo isLowerCase($string1) ? "$string1 is all lowercase." : "$string1 is not all lowercase.";
echo "<br>";
echo isLowerCase($string2) ? "$string2 is all lowercase." : "$string2 is not all lowercase.";
echo "<br>";
echo isLowerCase($string3) ? "$string3 is all lowercase." : "$string3 is not all lowercase.";
?>