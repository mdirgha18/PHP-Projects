<?php
$result = "";
$num1 = "";
$num2 = "";
$operation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Validate input
    if (!is_numeric($num1) || (!is_numeric($num2) && !in_array($operation, ['sqrt']))) {
        $result = "❌ Please enter valid numbers.";
    } else {
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
                $result = ($num2 == 0) ? "❌ Cannot divide by zero!" : $num1 / $num2;
                break;
            case "power":
                $result = pow($num1, $num2);
                break;
            case "modulo":
                $result = $num1 % $num2;
                break;
            case "sqrt":
                $result = sqrt($num1);
                break;
            default:
                $result = "❌ Invalid operation.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Enhanced Calculator</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    text-align: center;
    padding: 50px;
}
form {
    background: #fff;
    padding: 20px;
    display: inline-block;
    border-radius: 10px;
    box-shadow: 0px 0px 10px #aaa;
}
input[type="text"], select {
    padding: 5px;
    width: 120px;
    margin-bottom: 10px;
}
input[type="submit"], input[type="button"] {
    padding: 5px 15px;
    margin: 5px;
}
h2, h3 {
    color: #333;
}
</style>
<script>
function clearForm() {
    document.getElementById("calcForm").reset();
}
function allowNumbersOnly(e) {
    let char = String.fromCharCode(e.which);
    if (!(/[0-9\.]/.test(char))) {
        e.preventDefault();
    }
}
</script>
</head>
<body>

<h2>Enhanced PHP Calculator</h2>

<form id="calcForm" method="post">
    Number 1: <input type="text" name="num1" value="<?php echo htmlspecialchars($num1); ?>" onkeypress="allowNumbersOnly(event)" required><br>
    Number 2: <input type="text" name="num2" value="<?php echo htmlspecialchars($num2); ?>" onkeypress="allowNumbersOnly(event)" <?php if($operation=="sqrt") echo "disabled"; ?> ><br>
    
    Operation:
    <select name="operation" onchange="document.getElementsByName('num2')[0].disabled = (this.value=='sqrt')">
        <option value="add" <?php if($operation=="add") echo "selected"; ?>>Add (+)</option>
        <option value="subtract" <?php if($operation=="subtract") echo "selected"; ?>>Subtract (-)</option>
        <option value="multiply" <?php if($operation=="multiply") echo "selected"; ?>>Multiply (×)</option>
        <option value="divide" <?php if($operation=="divide") echo "selected"; ?>>Divide (÷)</option>
        <option value="power" <?php if($operation=="power") echo "selected"; ?>>Power (^)</option>
        <option value="modulo" <?php if($operation=="modulo") echo "selected"; ?>>Modulo (%)</option>
        <option value="sqrt" <?php if($operation=="sqrt") echo "selected"; ?>>Square Root (√)</option>
    </select><br><br>
    
    <input type="submit" value="Calculate">
    <input type="button" value="Clear" onclick="clearForm()">
</form>

<h3>Result: <?php echo $result; ?></h3>

</body>
</html>
