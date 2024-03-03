<?php

function isPalindrome($number) {
    $numberStr = (string)$number;
    
    $length = strlen($numberStr);

    for ($i = 0; $i < $length / 2; $i++) {

        if ($numberStr[$i] !== $numberStr[$length - $i - 1]) {
            
            return false;
        }
    }
    
    return true;
}

$number = 12321; 
if (isPalindrome($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}

?>
