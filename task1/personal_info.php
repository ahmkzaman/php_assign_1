<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>My Personal Information</h1>

        <?php
        $name = "K Zaman";
        $age = 32;
        $country = "Bangladesh";

        $intro = "I am a web developer. I specialize in designing and constructing websites and web applications. With a deep knowledge of programming languages like HTML, CSS, JavaScript and php, I create digital experiences that are visually appealing, functional and user-friendly.";

        echo "<h2> Hi, I'm $name. </h2>";
        echo "<h3> I'm $age years old. </h3>";
        echo "<h3> I'm from $country. </h3>";
        echo "<p> $intro</p>";
        ?>
    </div>
</body>

</html>