<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nginx PHP Demo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Nginx PHP Demo!</h1>
        <?php
        $hour = date("H");
        $greeting =
            $hour < 12
                ? "Good morning"
                : ($hour < 18
                    ? "Good afternoon"
                    : "Good evening");
        echo "<p>$greeting! The current time is " .
            date("Y-m-d H:i:s") .
            "</p>";
        ?>
        <p>This is a simple demo page hosted on an Nginx server using PHP.</p>
    </div>
</body>
</html>
