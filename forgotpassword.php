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
                <p class="welkom">Wachtwoord vergeten?</p>

                <!--Naam-->
                <div class="txt">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="name" placeholder="Gebruikersnaam of email" require>
                </div>

                <!--Email-->
                <div class="txt">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="email" placeholder="Nieuw wachtwoord" require>
                </div>

                <div class="txt">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="email" placeholder="Bevestig nieuw wachtwoord" require>
                </div>

                <!--Bericht-->
                <input type="submit" class="bttn" value="Verder">
                <br><br>
                <a href="forgotusername.php">Gebruikersnaam vergeten?</a><br>
                <a href="index.php">Login</a><br>

            </body>
</html>
