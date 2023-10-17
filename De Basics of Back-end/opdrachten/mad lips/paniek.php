<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Paniek</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="madlips.css">
</head>
<body>
    <?php
    echo '<style>.verhaal { display: none; }</style>';
    ?>
    <ul class="nav">
        <li><a href="http://localhost/opdrachten/mad%20lips/onkunde.php">Onkunde</a></li>
    </ul>

    <div class="vragen">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="dier">Welk dier zou je nooit als huisdier willen hebben?</label>
            <input type="text" id="dier" name="dier"><br><br>
            <label for="persoon">Wie is de belangrijkste persoon in je leven?</label>
            <input type="text" id="persoon" name="persoon"><br><br>
            <label for="land">In welk land zou je graag willen wonen?</label>
            <input type="text" id="land" name="land"><br><br>
            <label for="verveel">Wat doe je als je je verveelt?</label>
            <input type="text" id="verveel" name="verveel"><br><br>
            <label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
            <input type="text" id="speelgoed" name="speelgoed"><br><br>
            <label for="docent">Bij welke docent spijbel je het liefst?</label>
            <input type="text" id="docent" name="docent"><br><br>
            <label for="bezig">Wat is je favoriete bezigheid?</label>
            <input type="text" id="bezig" name="bezig"><br><br>
            <input type="submit" value="Verzenden">
        </form>

        <?php
        // Variables for form inputs
        $errors = array(); // Create an array to store validation errors

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dier = $_POST["dier"];
            $persoon = $_POST["persoon"];
            $land = $_POST["land"];
            $verveel = $_POST["verveel"];
            $speelgoed = $_POST["speelgoed"];
            $docent = $_POST["docent"];
            $bezig = $_POST["bezig"];

            // Validate each field for emptiness
            if (empty($dier)) {
                $errors[] = "Het veld 'Welk dier zou je nooit als huisdier willen hebben?' is verplicht.";
            }
            if (empty($persoon)) {
                $errors[] = "Het veld 'Wie is de belangrijkste persoon in je leven?' is verplicht.";
            }
            if (empty($land)) {
                $errors[] = "Het veld 'In welk land zou je graag willen wonen?' is verplicht.";
            }
            if (empty($verveel)) {
                $errors[] = "Het veld 'Wat doe je als je je verveelt?' is verplicht.";
            }
            if (empty($speelgoed)) {
                $errors[] = "Het veld 'Met welk speelgoed speelde je als kind het meest?' is verplicht.";
            }
            if (empty($docent)) {
                $errors[] = "Het veld 'Bij welke docent spijbel je het liefst?' is verplicht.";
            }
            if (empty($bezig)) {
                $errors[] = "Het veld 'Wat is je favoriete bezigheid?' is verplicht.";
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
            echo "Er heerst paniek in het koninkrijk $land. Koning $persoon is ten einde raad en als koning $persoon ten einde raad is, dan roept hij zijn ten-einde-raadsheer $docent.<br>";
            echo "<br>";
            echo "$docent! Het is een ramp! Het is een schande!<br>";
            echo "<br>";
            echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?<br>";
            echo "<br>";
            echo "Mijn $dier is verdwenen! Zo maar, zonder waarschuwing. En ik had net $speelgoed voor hem gekocht.<br>";
            echo "<br>";
            echo "Majesteit, uw $dier komt vast vanzelf weer terug?<br>";
            echo "<br>";
            echo "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $verveel?<br>";
            echo "<br>";
            echo "Maar Sire, daar kunt u toch uw $bezig voor gebruiken.<br>";
            echo "<br>";
            echo "$docent, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.<br>";
            echo "<br>";
            echo "Mij vervelen, Sire.<br>";
        ?>

    </div>
    <div class="maker">
        <?php
            echo "Deze website is gemaakt door Deviyano. © 2023"
        ?>
    </div>
</body>
</html>