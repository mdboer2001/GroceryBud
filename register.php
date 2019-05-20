<?php
if ($_POST) {
  $hash = password_hash($_POST["pass"], PASSWORD_BCRYPT);

  $dbh = new PDO("mysql:host=localhost;dbname=reg", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
  $stmt = $dbh->prepare("INSERT INTO `user` (`email`, `pass`, `naam`, `adres`, `woonplaats`, `tel`, `geboortedatum`) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([$_POST["email"], $hash, $_POST["naam"], $_POST["adres"], $_POST["woonplaats"], $_POST["tel"], $_POST["geboortedatum"]]);

  header("Location: .");
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
    label {
      display: block;
    }
  </style>
</head>
<body>
  <form action="register.php" method="post">
    <label>
      email
      <input type="email" name="email" required>
    </label>
    <label>
      wachtwoord
      <input type="text" name="pass" required>
    </label>
    <label>
      naam
      <input type="text" name="naam" required>
    </label>
    <label>
      adres
      <input type="text" name="adres" required>
    </label>
    <label>
      woonplaats
      <input type="text" name="woonplaats" required>
    </label>
    <label>
      telefoonnummer
      <input type="text" name="tel" required>
    </label>
    <label>
      geboortedatum
      <input type="date" name="geboortedatum" required>
    </label>
    <input type="submit" value="verzend">
  </form>
</body>
</html>
