<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form method="post" action="">
    <label for="num1">Enter first number:</label>
    <input type="number" name="num1" id="num1" required><br><br>
    
    <label for="num2">Enter second number:</label>
    <input type="number" name="num2" id="num2" required><br><br>
    
    <label for="operation">Choose operation:</label>
    <select name="operation" id="operation" required>
        <option value="addition">Addition (+)</option>
        <option value="subtraction">Subtraction (-)</option>
        <option value="multiplication">Multiplication (*)</option>
        <option value="division">Division (/)</option>
    </select><br><br>
    
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    switch($operation){
        case 'addition':
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
            break;
        case 'division':
            if($num2 != 0){
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            } else {
                echo "Error: Division by zero!";
            }
            break;
        default:
            echo "Invalid operation!";
    }
}
?>

</body>
</html>
