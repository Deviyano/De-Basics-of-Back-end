<?php
$phrase = "Learning PHP";
define("GREETING", "Hello world!");
$phrase = GREETING;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <h1><?php echo $phrase; ?></h1>
</body>
</html>