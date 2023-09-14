<!DOCTYPE html>
<html>

<head>
    <title>Compare Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Compare Two Numbers</h2>
        <form method="post" action="">
            Enter the first number: <input type="text" name="num1"><br><br>
            Enter the second number: <input type="text" name="num2"><br><br>
            <input type="submit" name="compare" value="Compare">
        </form>

        <?php
        if (isset($_POST['compare'])) {
            // Get the user-inputted numbers
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $largerNumber = ($num1 > $num2) ? $num1 : $num2;

            // Display the result
            echo "<p>The larger number is: $largerNumber</p>";
        }
        ?>
    </div>
</body>

</html>