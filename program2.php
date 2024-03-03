<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Leap Year Checker</h2>
    <form method="post">
        Enter a year: <input type="text" name="year">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
   
    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            return true;
        } else {
            return false;
        }
    }
    
    if (isset($_POST['submit'])) {
        $inputYear = $_POST['year'];
        if (is_numeric($inputYear) && $inputYear > 0 && $inputYear == round($inputYear)) {
            if (isLeapYear($inputYear)) {
                echo "<p>$inputYear is a leap year.</p>";
            } else {
                echo "<p>$inputYear is not a leap year.</p>";
            }
        } else {
            echo "<p>Please enter a valid positive integer year.</p>";
        }
    }
    ?>
</body>
</html>
