<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inloggen</title>
  <link rel="stylesheet" href="style.css" />

</head>
<body class="page-wrap">

  <header class="site-header">
    <nav class="site-nav">
      <a href="index.php" class="logo">Logo</a>
      <ul class="nav-links">
        <li><a href="index.php">Menu</a></li>
        <li><a href="bestellen.php" class="nav-cta">Bestellen</a></li>
      </ul>
      <div class="nav-right">
        <a href="inlog.php" class="nav-avatar">👤</a>
      </div>
    </nav>
  </header>

  <main class="login-wrap">
    <div class="login-card anim-1">

      <!-- Logo -->
      <div class="login-logo">
        <span class="login-logo-text">Logo</span>
      </div>

      <p class="login-sub">Log in om je bestellingen te bekijken<br />en je gegevens te beheren.</p>

      <!-- Velden -->
      <div class="login-fields">
        <div class="field">
          <label for="email">E-mailadres</label>
          <input type="email" id="email"/>
        </div>
        <div class="field">
          <label for="wachtwoord">Wachtwoord</label>
          <input type="password" id="wachtwoord"/>
        </div>
        <a href="#" class="forgot-link">Wachtwoord vergeten?</a>
      </div>

      <!-- Knoppen — zoals wireframe: twee knoppen onder elkaar -->
      <div class="login-actions">
        <button type="button" class="btn btn-green btn-full">Inloggen</button>
        <div class="divider">of</div>
        <a href="#" class="btn btn-ghost btn-full">Nog geen account? Registreer</a>
      </div>

    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-logo">Logo</div>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="formulier.php">Reserveer</a></li>
      </ul>
      <p class="footer-copy">© 2025 Restaurant. Alle rechten voorbehouden.</p>
    </div>
  </footer>

</body>
</html>