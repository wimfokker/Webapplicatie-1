<?php
  INCLUDE_ONCE ('database.php');
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bestellen</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
    INCLUDE_ONCE ('header.php')
  ?>

  <div class="order-layout">

    <!-- MENU LINKS -->
    <main class="menu-col">

      <!-- Zoekbalk -->
      <div class="search-bar">
        <input type="search" placeholder="Zoek een product…" aria-label="Zoeken" />
      </div>


      <!-- gerechten -->
      <section class="product-section" data-section="burgers">
        <h2 class="section-head">Gerechten</h2>
        <div class="product-grid">

          <article class="product-card" data-cat="burgers">
            <div class="prod-img">🥩<span class="prod-badge">Top</span></div>
            <div class="prod-body">
              <h3>Klassieke</h3>
              <p>Rundergehakt, cheddar, carameliseerde ui op brioche bun.</p>
              <span class="prod-price">€ 12,50</span>
            </div>
            <button class="prod-add" aria-label="Toevoegen">+</button>
          </article>
        </div>
      </section>

      <!-- Dranken -->
      <section class="product-section" data-section="dranken">
        <h2 class="section-head">Dranken</h2>
        <div class="product-grid">

          <article class="product-card" data-cat="dranken">
            <div class="prod-img">🥤</div>
            <div class="prod-body">
              <h3>Frisdrank</h3>
              <p>Cola, Fanta, Sprite of water naar keuze.</p>
              <span class="prod-price">€ 3,00</span>
            </div>
            <button class="prod-add" aria-label="Toevoegen">+</button>
          </article>
        </div>
      </section>

    </main>

    <!-- WINKELWAGEN RECHTS -->
    <aside class="cart-col" id="cart" aria-label="Winkelwagen">
      <div class="cart-scroll">
        <div class="cart-title">
          Jouw bestelling
          <button class="cart-close-btn" aria-label="Sluiten">✕</button>
        </div>

        <ul class="cart-items">
          <li class="cart-item">
            <div class="ci-info"><span class="ci-name">De Klassieke</span><span class="ci-desc">Standaard</span></div>
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

  <script>
    // Categorie filter
    document.querySelectorAll('.cat-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.cat;
        document.querySelectorAll('.product-section').forEach(s => {
          s.style.display = (cat === 'all' || s.dataset.section === cat) ? '' : 'none';
        });
      });
    });
    // Mobiel cart
    const cart    = document.getElementById('cart');
    const overlay = document.querySelector('.cart-overlay');
    const openBtn = document.querySelector('.cart-toggle-btn');
    const closeBtn = document.querySelector('.cart-close-btn');
    function openCart()  { cart.classList.add('open');    overlay.classList.add('visible');    document.body.style.overflow = 'hidden'; }
    function closeCart() { cart.classList.remove('open'); overlay.classList.remove('visible'); document.body.style.overflow = ''; }
    openBtn.addEventListener('click', openCart);
    closeBtn.addEventListener('click', closeCart);
    overlay.addEventListener('click', closeCart);
  </script>

</body>
</html>