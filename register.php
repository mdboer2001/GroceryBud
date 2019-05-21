<?php
require_once('dbconfig.php');


if ($_POST) {
  $hash = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $stmt = $dbh->prepare("INSERT INTO `users` (`email`, `password`, `user_naam`) VALUES (?, ?, ?)");
  $stmt->execute([$_POST["email"], $hash, $_POST["user_naam"]]);

  header("Location: login.php");
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
                <!-- email -->
                <div class="txt">
                    <input type="text" name="email" placeholder="Email *" required>
                </div>
                <!-- naam -->
                <div class="txt">
                    <input type="text" name="user_naam" placeholder="Naam *" required>
                </div>
                <!-- wachtwoord -->
                <div class="txt">
                    <input type="password" name="password" placeholder="Wachtwoord *" required>
                </div>



                <!--Bericht-->
                <input type="submit" class="bttn" id="buttn" value="Maak je account aan.">
                <br>
                <a href="forgotusername.php">Gebruikersnaam vergeten?</a><br>
                <a href="forgotpassword.php">Wachtwoord vergeten?</a><br><br>
                <a href="login.php" class="register">Heb je al een account? Log hier in.</a>
            </body>
</html>
