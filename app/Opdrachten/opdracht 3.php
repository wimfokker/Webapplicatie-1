<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn resultaat</title>
</head>
<body>

<h2>Temperatuur</h2>

<?php
// Maak een variabele voor de temperatuur
$temperatuur = 20;

// Als de temperatuur hoger is dan 25:
// Toon: "Het is warm."
//
// Als de temperatuur tussen 15 en 25 ligt:
// Toon: "Het is lekker weer."
//
// Anders:
// Toon: "Het is koud."

if ($temperatuur > 25) {
    echo "Het is warm.";
    } elseif ($temperatuur >= 15 && $tempratuur <= 25) {
    echo "Het is lekker weer.";
    }
    else {
    echo "het is koud.";
}

?>
</body>
</html>