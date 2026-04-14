<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Burger Restaurant — Home</title>
  <link rel="stylesheet" href="style.css" />

</head>

<body class="page-wrap">

  <?php
  include_once('header.php')
  ?>

  <!-- HERO -->
  <section class="hero" aria-label="Welkomst">
    <div class="hero-inner">

      <!-- Links: kleine afbeelding + tekst -->
      <div class="hero-left anim-1">
        <div class="hero-thumb">🍔</div>
        <div class="hero-text">
          <span class="eyebrow">Restaurant · Nijmegen</span>
          <h1>Burgers<br />& <em>tasteful</em></h1>
          <div class="hero-btns">
            <a href="menu.php" class="btn btn-green">menu</a>
          </div>
        </div>
      </div>

      <!-- Rechts: grote afbeelding -->
      <div class="hero-right anim-2">
        <div class="hero-img-main">
          🍔
          <div class="hero-img-badge">
            <span>Voor vandaag</span>
            <strong>Double Smash Buger</strong>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->

  <?php
  include_once('footer.php');
  ?>

</body>

</html>