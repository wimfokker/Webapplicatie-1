<?php session_start();

  if (!isset($_SESSION['ingeloged']) || $_SESSION['ingeloged'] !== true) {
    header ('location: inlog.php');
    exit;
  }

 include_once ('database.php');

  if (isset($_POST['actie']) && $_POST['actie'] === 'verwijderen') {
    $statement = $pdo->prepare("DELETE FROM gerechten WHERE id = ?");
    $statement->execute([$_POST['id']]);
    header('Location: admin.php');
    exit;
  }

  if (isset($_POST['actie']) && $_POST['actie'] === 'verwijderen_drank') {
    $statement = $pdo->prepare("DELETE FROM drankjes WHERE id = ?");
    $statement->execute([$_POST['id']]);
    header('Location: admin.php');
    exit;
  }

  $statement = $pdo->query("SELECT * FROM gerechten");
  $gerechten = $statement->fetchAll(PDO::FETCH_ASSOC);

  $statement = $pdo->query("SELECT * FROM drankjes");
  $drankjes = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beheer</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="admin-body">

  <!-- ── HEADER ──────────── -->

  <header class="site-header">
    <nav class="site-nav">
        <a href="index.php" class="logo">Starbuns</a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php" class="nav-cta">menu</a></li>
            <li><a href="admin.php">admin</a><li>
            <li><a href="loguit.php">uitloggen</a><li>

        </ul>
        <div class="nav-right">
            </div>
            <a href="admin.php" class="nav-avatar">👤</a>
        </div>
    </nav>
  </header>

  <!-- ── PAGINA INHOUD ──────────────────────────── -->
  <main class="admin-wrap page-wrap">
    <div class="admin-inner">

      <!-- Paginakopping -->
      <header class="admin-page-head">
        <div>
          <span class="label-tag">Beheer</span>
          <h1 class="display-title">Gerechten<em> beheren</em></h1>
          <p class="body-lead">Voeg nieuwe gerechten toe, pas bestaande aan of verwijder ze uit het menu.</p>
        </div>
        <a href="toevoegen.php" class="btn btn-green"> toevoegen</a>
      </header>

      <!-- Gerechten tabel -->
      <section class="admin-table-section">
        <table class="admin-table">
          <thead>
            <tr>
              <th class="col-img"></th>
              <th class="col-name">Naam</th>
              <th class="col-cat">Categorie</th>
              <th class="col-desc">Omschrijving</th>
              <th class="col-price">Prijs</th>
              <th class="col-actions"></th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $statement = $pdo->query("SELECT * FROM gerechten");
            $gerechten = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($gerechten as $gerecht) {
            $titel = htmlspecialchars($gerecht["titel"]);
            $prijs = htmlspecialchars($gerecht["prijs"]);
            $icon = htmlspecialchars($gerecht["icon"]);
            $info = htmlspecialchars($gerecht["info"]);
            $id = htmlspecialchars($gerecht["id"]);
            ?>

            <tr>
              <td><div class="table-thumb"<?php echo $icon ?></div></td>
              <td class="td-name"><?php echo $titel ?></td>
              <td><span class="cat-pill cat-burger">Gerechten</span></td>
              <td class="td-desc"><?php echo $info ?></td>
              <td class="td-price">€<?php echo $prijs ?></td>
              <td class="td-actions">
                <a href="bewerken.php?id=<?php echo $id ?>&type=gerecht" class="action-btn edit-btn" title="Bewerken">✏️</a>
                <form action="admin.php" method="post" style="display:inline">
                  <input type="hidden" name="actie" value="verwijderen" />
                  <input type="hidden" name="id" value="<?php echo $id ?>" />
                  <button type="submit" class="action-btn del-btn" title="Verwijderen">🗑️</button>
                </form>
              </td>
            </tr>
            <?php } ?>

            <?php 
            $statement = $pdo->query("SELECT * FROM drankjes");
            $drankjes = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($drankjes as $drank) {
            $titel = htmlspecialchars($drank["titel"]);
            $prijs = htmlspecialchars($drank["prijs"]);
            $icon = htmlspecialchars($drank["icon"]);
            $info = htmlspecialchars($drank["info"]);
            $id = htmlspecialchars($drank["id"]);
            ?>
            
            <tr>
              <td><div class="table-thumb"<?php echo $icon ?></div></td>
              <td class="td-name"><?php echo $titel ?></td>
              <td><span class="cat-pill cat-drink">Drankjes</span></td>
              <td class="td-desc"><?php echo $info ?></td>
              <td class="td-price">€<?php echo $prijs ?></td>
              <td class="td-actions">
                <a href="bewerken.php?id=<?php echo $id ?>&type=drank" class="action-btn edit-btn" title="Bewerken">✏️</a>
                <form action="admin.php" method="post" style="display:inline">
                  <input type="hidden" name="actie" value="verwijderen_drank" />
                  <input type="hidden" name="id" value="<?php echo $id ?>" />
                  <button type="submit" class="action-btn del-btn" title="Verwijderen">🗑️</button>
                </form>
              </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </section>

    </div>
  </main>

</body>
</html>