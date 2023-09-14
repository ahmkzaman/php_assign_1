<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Temperature Converter</h1>

    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" id="temperature" name="temperature" required>

        <label for="conversion">Select Conversion:</label>
        <select id="conversion" name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>

    <?php
    // Function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    // Function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = floatval($_POST["temperature"]);
        $conversion = $_POST["conversion"];

        if ($conversion == "celsius_to_fahrenheit") {
            $result = celsiusToFahrenheit($temperature);
            echo "<p><b> $temperature is $result in Fahrenheit </b> </p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = fahrenheitToCelsius($temperature);
            echo "<p> <b> $temperature is $result in Celsius </b></p>";
        }
    }
    ?>
</body>

</html>