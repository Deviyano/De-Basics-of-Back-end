<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="madlips.css">
</head>
<body>
    <h1>Onkunde</h1>
    <ul class="nav">
        <li><a href="http://localhost/opdrachten/mad%20lips/paniek.php">Paniek</a></li>
    </ul>
    <?php echo '<style>.verhaal { display: none; }</style>'; ?>
    <div class= "vragen">  
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="kunnen">Wat zou je graag willen kunnen? </label>
            <input type="text" id="kunnen" name="kunnen"><br>
            <br>
            <label for="opschieten">Met welke persoon kun je goed opschieten? </label>
            <input type="text" id="opschieten" name="opschieten"><br>
            <br>
            <label for="getal">Wat is je favoriete getal? </label>
            <input type="text" id="getal" name="getal"><br>
            <br>
            <label for="vakantie">Wat heb je altijd bij je als je op vakantie gaat? </label>
            <input type="text" id="vakantie" name="vakantie"><br>
            <br>
            <label for="eigenschap">Wat is je beste persoonlijke eigenschap? </label>
            <input type="text" id="eigenschap" name="eigenschap"><br>
            <br>
            <label for="slecht">Wat is je slechtste persoonlijke eigenschap? </label>
            <input type="text" id="slecht" name="slecht"><br>
            <br>
            <label for="overkomen">Wat is het ergste dat je kan overkomen? </label>
            <input type="text" id="overkomen" name="overkomen"><br>
            <br>
            <input type="submit" value="Verzenden">
        </form>

            <?php
        // Variables for form inputs
        $errors = array(); // Create an array to store validation errors

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kunnen = $_POST["kunnen"];
            $opschieten = $_POST["opschieten"];
            $getal = $_POST["getal"];
            $vakantie = $_POST["vakantie"];
            $eigenschap= $_POST["eigenschap"];
            $slecht= $_POST["slecht"];
            $overkomen = $_POST["overkomen"];

            // Validate each field for emptiness
            if (empty($kunnen)) {
                $errors[] = "Het veld 'Wat zou je graag willen kunnen?' is verplicht.";
            }
            if (empty($opschieten)) {
                $errors[] = "Het veld 'Met welke persoon kun je goed opschieten?' is verplicht.";
            }
            if (empty($getal)) {
                $errors[] = "Het veld 'Wat is je favoriete getal?' is verplicht.";
            }
            if (!is_numeric($getal)) {
                $errors[] = "Het veld 'Wat is je favoriete getal?' moet een geldig getal zijn.";
            }
            if (empty($vakantie)) {
                $errors[] = "Het veld 'Wat heb je altijd bij je als je op vakantie gaat?' is verplicht.";
            }
            if (empty($eigenschap)) {
                $errors[] = "Het veld 'Wat is je beste persoonlijke eigenschap?' is verplicht.";
            }
            if (empty($slecht)) {
                $errors[] = "Het veld 'Wat is je slechtste persoonlijke eigenschap?' is verplicht.";
            }
            if (empty($overkomen)) {
                $errors[] = "Het veld 'Wat is het ergste dat je kan overkomen?' is verplicht.";
            }
            
            // Check if there are validation errors before processing the form data
            if (empty($errors)) {
                echo '<style>.verhaal { display: block; }</style>';
                echo '<style>.vragen { display: none; }</style>';
                // Process the form data or proceed to the story creation
            } else {
                // Display validation errors
                echo "<div class='error-message'>";
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
    
                }
                echo "</ul>";
                echo "</div>";
            }
        }
        ?>
    </div>
    
    <div class="verhaal">
        <?php
            echo "Er zijn veel mensen die niet kunnen $kunnen. Neem nou $opschieten. Zelfs met de hulp van een $vakantie of zelfs $getal kan $opschieten niet $kunnen. Dat heeft niet te maken met een gebrek aan $eigenschap, maar met een te veel aan $slecht. Te veel $slecht leidt tot $overkomen en dat is niet goed als je wilt $kunnen. Helaas voor $opschieten";
        ?>
    </div>

    <div class="maker">
        <?php
            echo "Deze website is gemaakt door Deviyano. © 2023";
        ?>
    </div>
</body>
</html>