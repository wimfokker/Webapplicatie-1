<?php
  INCLUDE_ONCE ('database.php');
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

  <?php INCLUDE_ONCE ('header.php'); ?>

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

      <!-- Filter / zoekbalk boven tabel -->
      <div class="admin-toolbar">
        <div class="admin-search">
          <span class="admin-search-icon">🔍</span>
          <input type="search" placeholder="Zoek gerecht…" class="admin-search-input" />
        </div>
        <div class="admin-cat-bar">
          <button class="cat-btn active">Alles</button>
          <button class="cat-btn">Burgers</button>
          <button class="cat-btn">Sides</button>
          <button class="cat-btn">Dranken</button>
          <button class="cat-btn">Desserts</button>
        </div>
      </div>

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
              <th class="col-status">Status</th>
              <th class="col-actions"></th>
            </tr>
          </thead>
          <tbody>

            <!-- Rij 1 -->
            <tr>
              <td><div class="table-thumb" style="background:#e8f5ef;">🍔</div></td>
              <td class="td-name">The Classic</td>
              <td><span class="cat-pill cat-burger">Burger</span></td>
              <td class="td-desc">Runderburger, cheddar, sla, tomaat, huissaus</td>
              <td class="td-price">€ 12,50</td>
              <td><span class="status-pill status-on">Actief</span></td>
              <td class="td-actions">
                <button class="action-btn edit-btn" onclick="openEdit(this)" title="Bewerken">✏️</button>
                <button class="action-btn del-btn" onclick="openDelete(this)" title="Verwijderen">🗑️</button>
              </td>
            </tr>

            <!-- Rij 2 -->
            <tr>
              <td><div class="table-thumb" style="background:#f5f0e8;">🥬</div></td>
              <td class="td-name">The Garden</td>
              <td><span class="cat-pill cat-burger">Burger</span></td>
              <td class="td-desc">Plantaardig patty, avocado, rode ui, dijonsaus</td>
              <td class="td-price">€ 13,00</td>
              <td><span class="status-pill status-on">Actief</span></td>
              <td class="td-actions">
                <button class="action-btn edit-btn" onclick="openEdit(this)" title="Bewerken">✏️</button>
                <button class="action-btn del-btn" onclick="openDelete(this)" title="Verwijderen">🗑️</button>
              </td>
            </tr>

            <!-- Rij 3 -->
            <tr>
              <td><div class="table-thumb" style="background:#f0f5f2;">🍟</div></td>
              <td class="td-name">Crispy Fries</td>
              <td><span class="cat-pill cat-side">Side</span></td>
              <td class="td-desc">Huisgemaakte friet met kruidenzout</td>
              <td class="td-price">€ 4,50</td>
              <td><span class="status-pill status-on">Actief</span></td>
              <td class="td-actions">
                <button class="action-btn edit-btn" onclick="openEdit(this)" title="Bewerken">✏️</button>
                <button class="action-btn del-btn" onclick="openDelete(this)" title="Verwijderen">🗑️</button>
              </td>
            </tr>

            <!-- Rij 4 -->
            <tr>
              <td><div class="table-thumb" style="background:#e8f5ef;">🥤</div></td>
              <td class="td-name">Huislemonade</td>
              <td><span class="cat-pill cat-drink">Drank</span></td>
              <td class="td-desc">Verse limonade met munt en gember</td>
              <td class="td-price">€ 3,75</td>
              <td><span class="status-pill status-off">Inactief</span></td>
              <td class="td-actions">
                <button class="action-btn edit-btn" onclick="openEdit(this)" title="Bewerken">✏️</button>
                <button class="action-btn del-btn" onclick="openDelete(this)" title="Verwijderen">🗑️</button>
              </td>
            </tr>

            <!-- Rij 5 -->
            <tr>
              <td><div class="table-thumb" style="background:#f5f0e8;">🍦</div></td>
              <td class="td-name">Vanilla Softijs</td>
              <td><span class="cat-pill cat-dessert">Dessert</span></td>
              <td class="td-desc">Romig softijs in een wafelhoorn</td>
              <td class="td-price">€ 3,00</td>
              <td><span class="status-pill status-on">Actief</span></td>
              <td class="td-actions">
                <button class="action-btn edit-btn" onclick="openEdit(this)" title="Bewerken">✏️</button>
                <button class="action-btn del-btn" onclick="openDelete(this)" title="Verwijderen">🗑️</button>
              </td>
            </tr>

          </tbody>
        </table>
      </section><!-- /admin-table-section -->

    </div><!-- /admin-inner -->
  </main>

  <!-- ═══════════════════════════════════════
       MODAL — GERECHT TOEVOEGEN
  ════════════════════════════════════════ -->
  <div id="modal-add" class="modal-backdrop" onclick="closeModalBackdrop(event,'modal-add')">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modal-add-title">

      <div class="modal-head">
        <h2 id="modal-add-title" class="modal-title">Gerecht toevoegen</h2>
        <button class="modal-close" onclick="document.getElementById('modal-add').classList.remove('modal-open')" aria-label="Sluiten">✕</button>
      </div>

      <div class="modal-body">
        <div class="field-row">
          <div class="field-group">
            <label class="field-label" for="add-naam">Naam</label>
            <input id="add-naam" class="field-input" type="text" placeholder="bijv. Double Smash" />
          </div>
          <div class="field-group field-sm">
            <label class="field-label" for="add-prijs">Prijs (€)</label>
            <input id="add-prijs" class="field-input" type="number" step="0.01" placeholder="0,00" />
          </div>
        </div>

        <div class="field-row">
          <div class="field-group">
            <label class="field-label" for="add-cat">Categorie</label>
            <select id="add-cat" class="field-input field-select">
              <option value="">— Kies categorie —</option>
              <option>Burger</option>
              <option>Side</option>
              <option>Drank</option>
              <option>Dessert</option>
            </select>
          </div>
          <div class="field-group field-sm">
            <label class="field-label" for="add-status">Status</label>
            <select id="add-status" class="field-input field-select">
              <option>Actief</option>
              <option>Inactief</option>
            </select>
          </div>
        </div>

        <div class="field-group">
          <label class="field-label" for="add-desc">Omschrijving</label>
          <textarea id="add-desc" class="field-input field-textarea" rows="3" placeholder="Korte beschrijving van het gerecht…"></textarea>
        </div>

        <div class="field-group">
          <label class="field-label" for="add-emoji">Emoji / icoon</label>
          <input id="add-emoji" class="field-input" type="text" placeholder="bijv. 🍔" maxlength="4" />
        </div>
      </div>

      <div class="modal-foot">
        <button class="btn btn-ghost" onclick="document.getElementById('modal-add').classList.remove('modal-open')">Annuleren</button>
        <button class="btn btn-green">Opslaan</button>
      </div>

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
              <option>Burger</option>
              <option>Side</option>
              <option>Drank</option>
              <option>Dessert</option>
            </select>
          </div>
          <div class="field-group field-sm">
            <label class="field-label" for="edit-status">Status</label>
            <select id="edit-status" class="field-input field-select">
              <option>Actief</option>
              <option>Inactief</option>
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

  <!-- ═══════════════════════════════════════
       MODAL — VERWIJDER BEVESTIGING
  ════════════════════════════════════════ -->
  <div id="modal-delete" class="modal-backdrop" onclick="closeModalBackdrop(event,'modal-delete')">
    <div class="modal-card modal-card-sm" role="dialog" aria-modal="true" aria-labelledby="modal-del-title">

      <div class="modal-head">
        <h2 id="modal-del-title" class="modal-title">Gerecht verwijderen</h2>
        <button class="modal-close" onclick="document.getElementById('modal-delete').classList.remove('modal-open')" aria-label="Sluiten">✕</button>
      </div>

      <div class="modal-body">
        <p class="modal-confirm-text">Weet je zeker dat je <strong id="del-name">dit gerecht</strong> wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt.</p>
      </div>

      <div class="modal-foot">
        <button class="btn btn-ghost" onclick="document.getElementById('modal-delete').classList.remove('modal-open')">Annuleren</button>
        <button class="btn btn-danger">Verwijderen</button>
      </div>

    </div>
  </div>

</body>
</html>