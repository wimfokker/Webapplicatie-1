<?php session_start();

    include_once('database.php');

    if(isset($_POST['id'])) {
        $statement = $pdo->prepare("UPDATE gerechten SET titel=?, prijs=?, info=?, icon=? WHERE id=?");
        $statement->execute([$_POST['titel'], $_POST['prijs'], $_POST['info'], $_POST['icon'], $_POST['id']]);
        header('location: admin.php');
        exit;
    }

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM gerechten WHERE id = ?");
    $statement->execute([$id]);
    $gerecht = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerken</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="admin-body">
    <main class="admin-wrap page-wrap">
        <div class="admin-inner">

            <header class="admin-page-head">
                <div>
                    <span class="label-tag">Beheer</span>
                    <h1 class="display-title">Gerecht <em>bewerken</em></h1>
                </div>
                <a href="admin.php" class="btn btn-ghost">← Terug</a>
            </header>

            <section class="admin-table-section" style="padding: 2rem;">
                <form action="bewerken.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $gerecht['id']?>">
                    <input type="hidden" name="type" value="<?php echo $type ?>">

                    <div class="field-group">
                        <label class="field-label">Naam</label>
                        <input type="text" name="titel" class="field-input" 
                        value="<?php echo htmlspecialchars($gerecht['titel'])?>">
                    </div>

                    <div class="field-group">
                        <label class="field-label">Prijs</label>
                        <input type="text" name="prijs" class="field-input" 
                        value="<?php echo htmlspecialchars($gerecht['prijs'])?>">
                    </div>

                    <div class="field-group">
                        <label class="field-label">Info</label>
                        <textarea name="info" class="field-input field-textarea"><?php echo htmlspecialchars($gerecht['info'])?></textarea>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Icon</label>
                        <input type="text" name="icon" class="field-input" 
                        value="<?php echo htmlspecialchars($gerecht['icon'])?>">
                    </div>

                    <div class="modal-foot">
                        <a href="admin.php" class="btn btn-ghost">Annuleren</a>
                        <button type="submit" class="btn btn-green">Opslaan</button>
                    </div>

                </form>
            </section>

        </div>
    </main>
</body>
</html>