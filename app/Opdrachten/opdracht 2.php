<?php

// STAP 1: Maak hier een array met je hobby's
// Bijvoorbeeld: ["Gamen", "Voetbal", "Programmeren"]

$hobby = ["gamen", "programeren", "anime"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mijn Hobby's</title>
    </head>
    <body>

    <h2>Hobby's</h2>

    <ul>
        <!-- STAP 2: Toon hier je hobby's met een loop en HTML -->
        <?php
        foreach ($hobby as $hobby) {
            echo "<li>$hobby </li>";
        } /?>
    </ul>
</body>
</html>