<?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j % 2 == 0) {
            echo "0";
        } else {
            echo "1";
        }
    }
    echo "<br>";
}
?>

