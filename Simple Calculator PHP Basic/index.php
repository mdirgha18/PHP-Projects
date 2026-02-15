<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Validate input
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "❌ Please enter valid numbers.";
    } else {
        // Perform calculation
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 == 0) {
                    $result = "❌ Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "❌ Invalid operation.";
        }
    }
}
?>

<h2>Simple Calculator</h2>

<form method="post">
    Number 1: <input type="text" name="num1" required><br><br>
    Number 2: <input type="text" name="num2" required><br><br>
    
    Operation:
    <select name="operation">
        <option value="add">Add (+)</option>
        <option value="subtract">Subtract (-)</option>
        <option value="multiply">Multiply (×)</option>
        <option value="divide">Divide (÷)</option>
    </select><br><br>
    
    <input type="submit" value="Calculate">
</form>

<h3>Result: <?php echo $result; ?></h3>
