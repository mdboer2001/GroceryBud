<?php
session_start();

if (isset($_POST) && isset($_POST["email"])) {
  $dbh = new PDO("mysql:host=localhost;dbname=reg", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
  $stmt = $dbh->prepare("SELECT * FROM `user` WHERE `email` = ?");
  $stmt->execute([$_POST["email"]]);

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if (password_verify($_POST["pass"], $user["pass"])) {
    $_SESSION["user"] = $user;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body {
      width: 100vw;
      height: 100vh;
    }
    label {
      display: block;
    }
  </style>
</head>
<body style="background: linear-gradient(to right, red, yellow, lime, cyan, blue)">
  <?php if (!isset($_SESSION["user"])): ?>
  <form action="login.php" method="post">
    <label>
      email
      <input type="text" name="email">
    </label>
    <label>
      wachtwoord
      <input type="text" name="pass">
    </label>
    <input type="submit" value="login">
  </form>
  <?php else: ?>
  welkom <?php echo $_SESSION["user"]["naam"]; ?>
  <form action="modify.php" method="post">
    <label>
      email
      <input type="email" name="email" value="<?php echo $_SESSION["user"]["email"] ?>" required>
    </label>
    <label>
      naam
      <input type="text" name="naam" value="<?php echo $_SESSION["user"]["naam"] ?>" required>
    </label>
    <label>
      adres
      <input type="text" name="adres" value="<?php echo $_SESSION["user"]["adres"] ?>" required>
    </label>
    <label>
      woonplaats
      <input type="text" name="woonplaats" value="<?php echo $_SESSION["user"]["woonplaats"] ?>" required>
    </label>
    <label>
      telefoonnummer
      <input type="text" name="tel" value="<?php echo $_SESSION["user"]["tel"] ?>" required>
    </label>
    <label>
      geboortedatum
      <input type="date" name="geboortedatum" value="<?php echo $_SESSION["user"]["geboortedatum"] ?>" required>
    </label>
    <label>
      wachtwoord
      <input type="text" name="pass" placeholder="nieuw wachtwoord" required>
    </label>
    <input type="submit" value="verander gegevens">
  </form>
  <a href="logout.php">log uit</a>
  <?php endif; ?>
</body>
</html>
