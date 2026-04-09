<?php session_start();

  if (!isset($_SESSION['ingeloged']) || $_SESSION['ingeloged'] !== true) {
    header ('location: inlog.php');
    exit;
  }

 include_once ('database.php');


  if ($_POST['actie'] === 'toevoegen') {
    $statement = $pdo->prepare("INSERT INTO gerechten (titel, prijs, info, icon) VALUES (?, ?, ?, ?)");
    $statement->execute([$_POST['titel'], $_POST['prijs'], $_POST['info'], $_POST['icon']]);
    header('Location: admin.php');
    exit;
  }

  if ($_POST['actie'] === 'verwijderen') {
    $statement = $pdo->prepare("DELETE FROM gerechten WHERE id = ?");
    $statement->execute([$_POST['id']]);
    header('Location: admin.php');
    exit;
  }

  if ($_POST['actie'] === 'verwijderen_drank') {
    $statement = $pdo->prepare("DELETE FROM drankjes WHERE id = ?");
    $statement->execute([$_POST['id']]);
    header('Location: admin.php');
    exit;
  }

  if ($_POST['actie'] === 'bewerken') {
    $statement = $pdo->prepare("UPDATE gerechten SET titel=?, prijs=?, info=?, icon=? WHERE id=?");
    $statement->execute([$_POST['titel'], $_POST['prijs'], $_POST['info'], $_POST['icon'], $_POST['id']]);
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

  <!-- ── HEADER ─────────────────────────────────── -->

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
        <!-- Knop om modal te openen -->
        <button class="btn btn-green" onclick="document.getElementById('modal-add').classList.add('modal-open')">
          + Gerecht toevoegen
        </button>
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
                <a href="bewerken.php?id=<?php echo $id ?>" class="action-btn edit-btn" title="Bewerken">✏️</a>
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
                <a href="bewerken.php?id=<?php echo $id ?>" class="action-btn edit-btn" title="Bewerken">✏️</a>
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
      </section><!-- /admin-table-section -->

    </div><!-- /admin-inner -->
  </main>

  <!--gerecht toevoegen-->
  <div id="modal-add" class="modal-backdrop" onclick="closeModalBackdrop(event,'modal-add')">
  <div class="modal-card">
    <div class="modal-head">
      <h2 class="modal-title">Gerecht toevoegen</h2>
      <button class="modal-close" onclick="document.getElementById('modal-add').classList.remove('modal-open')">✕</button>
    </div>

    <form action="admin.php" method="post">
      <input type="hidden" name="actie" value="toevoegen" />
      <div class="modal-body">
        <div class="field-group">
          <label class="field-label">Naam</label>
          <input name="titel" class="field-input" type="text" placeholder="bijv. Double Smash" />
        </div>
        <div class="field-group">
          <label class="field-label">Prijs (€)</label>
          <input name="prijs" class="field-input" type="number" step="0.01" />
        </div>
        <div class="field-group">
          <label class="field-label">Omschrijving</label>
          <textarea name="info" class="field-input field-textarea" rows="3"></textarea>
        </div>
        <div class="field-group">
          <label class="field-label">Emoji / icoon</label>
          <input name="icon" class="field-input" type="text" maxlength="4" />
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="btn btn-ghost" onclick="document.getElementById('modal-add').classList.remove('modal-open')">Annuleren</button>
        <button type="submit" class="btn btn-green">Opslaan</button>
      </div>
    </form>

  </div>
</div>

  <!-- ═══════════════════════════════════════
       MODAL — GERECHT BEWERKEN
  ════════════════════════════════════════ -->
  <div id="modal-edit" class="modal-backdrop" onclick="closeModalBackdrop(event,'modal-edit')">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modal-edit-title">

      <div class="modal-head">
        <h2 id="modal-edit-title" class="modal-title">Gerecht bewerken</h2>
        <button class="modal-close" onclick="document.getElementById('modal-edit').classList.remove('modal-open')" aria-label="Sluiten">✕</button>
      </div>

      <div class="modal-body">
        <div class="field-row">
          <div class="field-group">
            <label class="field-label" for="edit-naam">Naam</label>
            <input id="edit-naam" class="field-input" type="text" />
          </div>
          <div class="field-group field-sm">
            <label class="field-label" for="edit-prijs">Prijs (€)</label>
            <input id="edit-prijs" class="field-input" type="number" step="0.01" />
          </div>
        </div>

        <div class="field-row">
          <div class="field-group">
            <label class="field-label" for="edit-cat">Categorie</label>
            <select id="edit-cat" class="field-input field-select">
              <option>Gerechten</option>
              <option>Dranken</option>
            </select>
          </div>
        </div>

        <div class="field-group">
          <label class="field-label" for="edit-desc">Omschrijving</label>
          <textarea id="edit-desc" class="field-input field-textarea" rows="3"></textarea>
        </div>

        <div class="field-group">
          <label class="field-label" for="edit-emoji">Emoji / icoon</label>
          <input id="edit-emoji" class="field-input" type="text" maxlength="4" />
        </div>
      </div>

      <div class="modal-foot">
        <button class="btn btn-ghost" onclick="document.getElementById('modal-edit').classList.remove('modal-open')">Annuleren</button>
        <button class="btn btn-green">Wijzigingen opslaan</button>
      </div>

    </div>
  </div>
  
</body>
</html>