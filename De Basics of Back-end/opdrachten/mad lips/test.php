<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="vragen">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="test_vraag">Is dit een test lol?</label>
            <input type="text" id="test_vraag" name="test"><br><br>
            <input type="submit" name="verzenden" value="Verzenden">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verzenden"])) {
        $test = $_POST["test"];
        echo '<style>.vragen { display: none; }</style>';
        echo "Test: " . $test;
    }
    ?>

</body>
</html>