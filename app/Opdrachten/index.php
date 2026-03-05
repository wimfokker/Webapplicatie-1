<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn Profiel</title>
</head>
<body>

<h1>Mijn Profiel</h1>
<?php

// STAP 1: Maak hier je variabelen.
// $naam
// $leeftijd
// $uurloon
// $urenGewerkt

// STAP 2: Toon hier je naam en leeftijd.

// STAP 3: Bereken hier hoeveel je hebt verdiend en laat dit zien.

$naam = "Wim Fokker";
$leeftijd = 17;
$uurloon = 14;
$urengewerkt = 40;

echo "mijn naam is $naam en ik ben $leeftijd jaar oud.";

$verdient = $uurloon * $urengewerkt;
echo "ik heb deze maand $verdient euro verdiend.";

?>
</body>
</html>

