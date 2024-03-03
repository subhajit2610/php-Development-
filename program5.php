<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Test the function
$number = 5;
echo "Factorial of $number is: " . factorial($number);
?>
