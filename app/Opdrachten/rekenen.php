<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>rekenen</h1>
    <form name="bereken" action="rekenen.php" method="post">
    <div>Getal 1: <input name="getal1" type="number" required/></div>
    <div>Getal 2: <input name="getal2" type="number" required/></div>
    <div>Getal 3: <input name="getal3" type="number" required/></div>
    <div>
        <input type="submit"/><input type="reset"/>
    </div>
    </form>

    <?php
        echo "test";
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";

        if (isset($_POST["submit"])) {
            $getal1 = $_POST["getal1"];
            $getal1 = $_POST["getal2"];
            $getal1 = $_POST["getal3"];

            $gemiddelde = ($getal1 + $getal2 + $gettal3) / 3;

            echo "Je gemiddde getal";
        }
    ?>
</body>
</html>