<?php
include_once('database.php');
?>

<?php
// Je zet altijd een zoek term bovenaan je PHP, na include_once('database.php')
$zoekterm = trim($_GET['search'] ?? '');
$zoekWildcard = '%' . $zoekterm . '%';
?>

<?php 

print_r($_GET);

if (isset($_GET["search"]) && $_GET["search"] !== "") {
  echo "formulier is gebruikt, ik moet gaan zoeken";
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>menu</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  include_once('header.php')
  ?>

  <!-- Haal gerechten tabel van de database in de bestelling.-->

  <div class="order-layout">

    <!-- MENU LINKS -->
    <main class="menu-col">

      <!-- Zoekbalk -->
      <form name="zoekform" action="menu.php" method="get">
        <div class="search-bar">
        <input type="search" name="search" value="<?php echo ($_GET['search'] ?? ''); ?>" placeholder="Zoek" aria-label="Zoeken" />
        </div>
      </form>


      <!-- gerechten -->
      <section class="product-section" data-section="burgers">
        <h2 class="section-head">Gerechten</h2>
        <div class="product-grid">

          <?php
            $statement = $pdo->prepare("SELECT * FROM gerechten WHERE titel LIKE ? OR info LIKE ?");
            $statement->execute([$zoekWildcard, $zoekWildcard]);
            $gerechten = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($gerechten as $gerecht){

            $titel = htmlspecialchars($gerecht["titel"]);
            $prijs = htmlspecialchars($gerecht["prijs"]);
            $icon = htmlspecialchars($gerecht["icon"]);
            $info = htmlspecialchars($gerecht["info"]);
          ?>

          <article class="product-card" data-cat="burgers">
            <div class="prod-img"> <?php echo $icon ?></div>
            <div class="prod-body">
              <h3><?php echo $titel?></h3>
              <p><?php echo $info ?></p>
              <span class="prod-price">€<?php echo $prijs ?></span>
            </div>
            <button class="prod-add" aria-label="Toevoegen">+</button>
          </article>
          
          <?php }?>
        </div>
      </section>

      <!-- Dranken -->
      <section class="product-section" data-section="dranken">
        <h2 class="section-head">Dranken</h2>
        <div class="product-grid">

          <?php
            $statement = $pdo->prepare("SELECT * FROM drankjes WHERE titel LIKE ? OR info LIKE ?");
            $statement->execute([$zoekWildcard, $zoekWildcard]);
            $drankjes = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($drankjes as $drank){

            $titel = htmlspecialchars($drank["titel"]);
            $prijs = htmlspecialchars($drank["prijs"]);
            $icon = htmlspecialchars($drank["icon"]);
            $info = htmlspecialchars($drank["info"]);
          ?>

          <article class="product-card" data-cat="dranken">
            <div class="prod-img"><?php echo $icon ?></div>
            <div class="prod-body">
              <h3><?php echo $titel ?></h3>
              <p><?php echo $info ?></p>
              <span class="prod-price">€ <?php echo $prijs ?></span>
            </div>
            <button class="prod-add" aria-label="Toevoegen">+</button>
          </article>

          <?php }?>
        </div>
      </section>

    </main>

    <!-- WINKELWAGEN RECHTS werkt niet-->
    <aside class="cart-col" id="cart" aria-label="Winkelwagen">
      <div class="cart-scroll">
        <div class="cart-title">
          (Winkelwagen werkt niet want ik heb geen tijd om het te maken voor deze perioden.)
          <button class="cart-close-btn" aria-label="Sluiten">✕</button>
        </div>

        <ul class="cart-items">
          <li class="cart-item">
            <div class="ci-info"><span class="ci-name"></span>Cheese buger<span class="ci-desc">Standaart</span></div>
            <div class="ci-controls"><button class="qty-btn">−</button><span class="qty-num">2</span><button class="qty-btn">+</button></div>
            <span class="ci-price"></span>
          </li>
        </ul>

        <div class="cart-totals">
          <div class="cart-row"><span>Subtotaal</span><span></span></div>
          <div class="cart-row muted"><span>Incl. BTW</span><span></span></div>
          <div class="cart-divider"></div>
          <div class="cart-row total"><span>Totaal</span><span>€ 33,50</span></div>
        </div>

        <div class="cart-note">
          <label for="note">Opmerking</label>
          <textarea id="note" rows="2" placeholder="Bijv. geen ui, extra saus…"></textarea>
        </div>
      </div>

      <div class="cart-footer">
        <button class="btn-checkout">Afrekenen</button>
      </div>
    </aside>

  </div><!-- /order-layout -->

  <div class="cart-overlay"></div>

  <?php include_once('footer.php') ?>

</body>

</html>