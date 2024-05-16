<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form action="" method="get">
        <label for="num1">Enter number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Enter number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (
        $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["num1"]) &&
        isset($_GET["num2"]) && isset($_GET["operation"])
    ) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operation = $_GET["operation"];
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "Error: Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                    echo "Result: $num1 / $num2 = $result";
                }
                break;
            default:
                echo "Invalid operation";
        }
    }
    ?>
</body>

</html>
OUTPUT