<?php
// Studentenlijst
$studenten = [
        ["naam" => "Emma", "leeftijd" => 17],
        ["naam" => "Liam", "leeftijd" => 19],
        ["naam" => "Noah", "leeftijd" => 16],
        ["naam" => "Karim", "leeftijd" => 21],
        ["naam" => "Lucas", "leeftijd" => 18]
];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Studentenlijst</title>
</head>
<body>

<h1>Studentenlijst</h1>

<!-- HIER MOET JOUW CODE KOMEN -->
<!-- Toon de eerste, derde en vijfde student uit de lijst -->
<ul>
    <?php

        for($steller = 0; < count($studenten); $steller++){
            if($steller % 2 == 1) {
                echo "naam: " . $studenten[$steller]["naam"] . ", leeftijd: " . $studenten[$steller]["leeftijd"] . "<br>";
            }
        }
    ?>
</ul>

</body>
</html>