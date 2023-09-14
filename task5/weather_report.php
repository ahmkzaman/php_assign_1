<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Weather Information</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="temperature">Enter Temperature (in Celsius):</label>
            <input type="number" name="temperature" id="temperature" required><br>
            <input type="submit" value="Check Weather">
        </form>

        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the entered temperature
            $temperature = $_POST["temperature"];

            // Check the temperature range and display weather information
            if ($temperature <= 0) {
                $message = "It's freezing!";
            } elseif ($temperature > 0 && $temperature <= 15) {
                $message = "It's cool.";
            } else {
                $message = "It's warm.";
            }

            echo '<div class="result">';
            echo "<p>$message</p>";
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>