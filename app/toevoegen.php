<?php session_start();

    if (!isset($_SESSION['ingeloged']) || $_SESSION['ingeloged'] !== true) {
        header('Location: inlog.php');
        exit;
    }

    include_once('database.php');

    if (isset($_POST['titel'])) {
        $tabel = $_POST['catagorie'];
        $statement = $pdo->prepare("INSERT INTO $tabel (titel, prijs, info, icon) VALUES (?, ?, ?, ?)");
        $statement->execute([$_POST['titel'], $_POST['prijs'], $_POST['info'], $_POST['icon']]);
        header('Location: admin.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-body">
<main class="admin-wrap page-wrap">
<div class="admin-inner">

    <header class="admin-page-head">
        <div>
            <span class="label-tag">Beheer</span>
            <h1 class="display-title">Product <em>toevoegen</em></h1>
        </div>
        <a href="admin.php" class="btn btn-ghost">Terug</a>
    </header>

    <section class="admin-table-section">
        <form action="toevoegen.php" method="post">
            <div class="field-group">
                <label class="field-label">Naam</label>
                <input name="titel" class="field-input" type="text">
            </div>
            <div class="field-group">
                <label class="field-label">Categorie</label>
                <select name="catagorie" class="field-input field-select">
                    <option value="gerechten">Gerecht</option>
                    <option value="drankjes">Drankje</option>
                </select>
            </div>
            <div class="field-group">
                <label class="field-label">Prijs (€)</label>
                <input name="prijs" class="field-input" type="number" step="0.01">
            </div>
            <div class="field-group">
                <label class="field-label">Omschrijving</label>
                <textarea name="info" class="field-input field-textarea"></textarea>
            </div>
            <div class="field-group">
                <label class="field-label">Icon</label>
                <input name="icon" class="field-input" type="text">
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