<?php
require_once('dbconfig.php');
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
  }
if(isset($_POST["email"])) {
  $stmt = $dbh->prepare("SELECT * FROM `users` WHERE `email` = ?");
  $stmt->execute([$_POST["email"]]);

  $user = $stmt->fetch(PDO::FETCH_ASSOC);


if (isset($_POST["pass"])) {
  if (password_verify($_POST["pass"], $user["password"])) {
    $_SESSION["user"] = $user["user_naam"];
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["loggedin"] = true;
    header("location: index.php");
  }
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
        <form class="formulier" name="formulier" method="post">

            <div class="contact">
                <img src="img/logo.png" style="width: 400px;" class="logo">
                <p class="welkom">Welkom</p>


                <!--Naam-->
                <div class="txt">
                    <i class="fas fa-user icon" style="color: #707070"></i>
                    <input type="text" name="email" placeholder="Email" require>
                </div>

                <!--Email-->
                <div class="txt">
                    <i class="fas fa-key icon" style="color: #707070"></i>
                    <input type="password" name="pass" placeholder="Wachtwoord" require>
                </div>

                <!--Bericht-->
                <input type="submit" class="bttn" id="buttn" value="Login">
                <br>
                <a href="forgotusername.php">Gebruikersnaam vergeten?</a><br>
                <a href="forgotpassword.php">Wachtwoord vergeten?</a><br><br>
                <a href="register.php" class="register">Nog geen account? Meld je hier aan.</a>
            </div>
            </body>
</html>
