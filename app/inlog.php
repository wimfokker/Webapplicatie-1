<?php session_start();

include_once('database.php');

if (isset($_POST['email'], $_POST['wachtwoord'])) {
  $statement = $pdo->prepare("SELECT * FROM gebruikers WHERE email = ?");
  $statement -> execute([$_POST ['email']]);
  $gebruiker = $statement->fetch(); 


  if ($gebruiker && $_POST['wachtwoord'] === $gebruiker['wachtwoord']) {
    $_SESSION['ingeloged'] = true;
    header('location: admin.php');
    exit;
  } else { $fout = "verkeerde email of wachtwoord.";

  }
}

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
    <form action="inlog.php" method="post">
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
      <?php if (isset($fout)) { ?>
        <p style="color: red;"><?php echo $fout ?></p>
      <?php } ?> 
    </form> 
  </main>
    
  <?php
    INCLUDE_ONCE ('footer.php');
  ?>
</body>
</html>