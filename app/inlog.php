<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inloggen</title>
  <link rel="stylesheet" href="style.css" />

</head>
<body class="page-wrap">

  <?php
   INCLUDE_ONCE ('header.php')
  ?>

  <main class="login-wrap">
    <div class="login-card anim-1">

      <!-- Logo -->
    <div class="login-logo">
      <span class="login-logo-text">Starbuns</span>
    </div>

    <p class="login-sub">Log in om je bestellingen te bekijken<br />en je gegevens te beheren.</p>

    <!-- Velden -->

    <form action="admin.php" method="post">
      <div class="login-fields">
        <div class="field">
          <label for="email">E-mailadres</label>
          <input type="email" name="email" id="email"/>
        </div>
        <div class="field">
          <label for="wachtwoord">Wachtwoord</label>
          <input type="password" name="wachtwoord" id="wachtwoord" />
        </div>
      </div>
      <div class="login-actions">
        <button type="submit" class="btn btn-green btn-full">Inloggen</button>
      </div>
    </form>  

  </main>
    
  <?php
    INCLUDE_ONCE ('footer.php');
  ?>
</body>
</html>