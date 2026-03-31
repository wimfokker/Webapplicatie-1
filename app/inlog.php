<?php

session_start();
$_SESSION["isUserLoggedIn"] = true;

?>

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
      <div class="login-fields">
        <div class="field">
          <label for="email">E-mailadres</label>
          <input type="email" id="email"/>

          <?php 
          
          echo "<pre>";
          print_r($_SESSION);
          "</pre>";

          ?>

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

  <?php
    INCLUDE_ONCE ('footer.php');
  ?>

</body>
</html>