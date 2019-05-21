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
<html>
    <head>
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
        <form class="formulier" name="formulier" action="index.php" method="post">

            <div class="contact">
                <img src="img/logo.png" style="width: 300px;" class="logo">
                <p class="welkom">Welkom <?php echo $_SESSION["user"]["naam"]; ?></p>


                <!--Naam-->
                <div class="txt">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="email" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Email" require>
                </div>

                <!--Email-->
                <div class="txt">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="pass" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Wachtwoord" require>
                </div>

                <!--Bericht-->
                <input type="submit" class="bttn" id="buttn" value="Login">
                <br>
                <a href="forgotusername.php">Gebruikersnaam vergeten?</a><br>
                <a href="forgotpassword.php">Wachtwoord vergeten?</a><br><br>
                <a href="register.php" class="register">Nog geen account? Meld je hier aan.</a>
            </body>
</html>
