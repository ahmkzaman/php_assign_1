<?php

$score1 = 0;
$score2 = 0;
$score3 = 0;
$average = 0;
$grade = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the test scores from the form
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    // Calculate the average
    $average = ($score1 + $score2 + $score3) / 3;


    if ($average >= 70) {
        $grade = "A";
    } elseif ($average >= 60) {
        $grade = "B";
    } elseif ($average >= 50) {
        $grade = "C";
    } elseif ($average >= 40) {
        $grade = "D";
    } else {
        $grade = "F";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Test Score Calculator</title>
</head>

<body>
    <div class="container">

        <h1>Test Score Calculator</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" id="score1" required><br>

            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" id="score2" required><br>

            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" id="score3" required><br>

            <input type="submit" value="Calculate Average and Grade">
        </form>

        <div class="result">

            <?php

            if ($average > 0) {
                echo "<h2>Result:</h2>";
                echo "Average Score: " . number_format($average, 2) . "<br> <br>";
                echo "Obtained Grade: " . $grade;
            }
            ?>
        </div>
    </div>
</body>

</html>