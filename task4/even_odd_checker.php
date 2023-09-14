<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Even or Odd Checker</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" id="number" required><br>
            <input type="submit" value="Check The Number">
        </form>

        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the entered number
            $number = $_POST["number"];

            // Check even or odd 
            if ($number % 2 == 0) {
                echo '<div class="result">';
                echo "<p>$number is an even number.</p>";
                echo '</div>';
            } else {
                echo '<div class="result">';
                echo "<p>$number is an odd number.</p>";
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>