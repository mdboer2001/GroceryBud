<?php
session_start();
if ($_POST && isset($_SESSION["user"])) {
  $hash = password_hash($_POST["pass"], PASSWORD_BCRYPT);

  $dbh = new PDO("mysql:host=localhost;dbname=reg", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
  $stmt = $dbh->prepare("UPDATE `user` SET `email` = ?, `pass` = ?, `naam` = ?, `adres` = ?, `woonplaats` = ?, `tel` = ?, `geboortedatum` = ? WHERE `email` = ?");
  $stmt->execute([$_POST["email"], $hash, $_POST["naam"], $_POST["adres"], $_POST["woonplaats"], $_POST["tel"], $_POST["geboortedatum"], $_SESSION["user"]["email"]]);

  $_SESSION["user"] = $_POST;
}

header("Location: login.php");
