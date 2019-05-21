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
<html>
    <head>
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
        <form class="formulier" name="formulier" action="register.php" method="post">

            <div class="contact" id="reg">
                <img src="img/logo.png" style="width: 400px;" class="logo">
                <p class="welkom">Maak hier een account aan.</p>

                <!--Naam-->
                <div class="txt">
                    <input type="text" name="email" placeholder="Email *" required>
                </div>

                <!--Email-->
                <div class="txt">
                    <input type="password" name="pass" placeholder="Wachtwoord *" required>
                </div>
                <div class="txt">
                    <input type="text" name="naam" placeholder="Naam *" required>
                </div>


                <!--Bericht-->
                <input type="submit" class="bttn" id="buttn" value="Maak je account aan.">
                <br>
                <a href="forgotusername.php">Gebruikersnaam vergeten?</a><br>
                <a href="forgotpassword.php">Wachtwoord vergeten?</a><br><br>
                <a href="index.php" class="register">Heb je al een account? Log hier in.</a>
            </body>
</html>
