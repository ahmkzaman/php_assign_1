<!DOCTYPE html>
<html>

<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post">
            <div class="form-group">
                <label for="num1">Enter the first number:</label>
                <input type="number" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Enter the second number:</label>
                <input type="number" name="num2" required>
            </div>
            <div class="form-group">
                <label for="operation">Select calculation type:</label>
                <select name="operation">
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = 0;

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo '<div class="result">Division by zero is not allowed.</div>';
                    }
                    break;
            }

            echo '<div class="result">Result: ' . $result . '</div>';
        }
        ?>
    </div>
</body>

</html>