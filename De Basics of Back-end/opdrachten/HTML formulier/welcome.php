<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <style>
        .error-message {
            display: none;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="inhoud">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $naam = $_POST["naam"];
                    $email = $_POST["email"];
                    $naamValid = preg_match("/^[A-Za-z]+$/", $naam) && strlen($naam) > 0;
                    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

                    // Check for errors and display them
                    if (!$naamValid) {
                        echo "<p style='color: red;'>Ongeldige naam. Voer een geldige naam in zonder spaties.</p>";
                        echo "<script>document.querySelector('.naam-error').style.display = 'inline';</script>";
                    }
                    
                    if (!$emailValid) {
                        echo "<p style='color: red;'>Ongeldig e-mailadres. Voer een geldig e-mailadres in.</p>";
                        echo "<script>document.querySelector('.email-error').style display = 'inline';</script>";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST" && $naamValid && $emailValid) {
                    // Content to display after form submission
                    echo "<h1>De ingevulde gegevens zijn:</h1>";
                    echo "Naam: " . $naam . "<br>";
                    echo "Emailadres: " . $email;
                } else {
                    // Display the form when there are no errors or before submission
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="naam">Name:</label>
                <input type="text" id="naam" name="naam"> 
                <span class="required">*</span>
                <span class="error-message naam-error">Name is required</span><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <span class="required">*</span>
                <span class="error-message email-error">Email is required</span><br>
                <input type="submit" value="Verzenden">
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>