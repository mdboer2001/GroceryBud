<?php
$dbh = new PDO("mysql:host=localhost;dbname=grocerybud", "root", "", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }
  $user_id = $_SESSION["user_id"];
  $sql = "SELECT * FROM users WHERE id = ?";
  $stmt = $dbh->prepare($sql);
  $stmt->execute([$user_id]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if(isset($_POST["naam"]) && isset($_POST["email"])){
    $sql = "UPDATE users SET user_naam = ?, email = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_POST["naam"],$_POST["email"],$user_id));
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>My GroceryBud profile</title>
  </head>
  <body>
    <div class="profile">
      <div class="col-5">
        <img src="img/logo.png" style="width: 400px;" class="logo">
      </div>

      <div class="container">
        <form class="profielacc" method="post">
          <legend>
            <table>
              <div class="acc_pic"></div>
            <tr>
              <th><h2>Profiel</h2></th>
            </tr>
            <t>
              <th>Naam</th>
              <th>E-mail</th>
            </t>
            <?php

            ?>
              <tr>
                <td><input type="text" name="naam" value="<?php echo $user["user_naam"]; ?>"></input></td>
                <td><input type="text" name="email" value="<?php echo $user["email"]; ?>"></input></td>
                <td><input type="submit" value="verander"></input></td>
              </tr>
            <?php
            ?>
          </table>
        </legend>
        </form>
        <div class="row">
          <div class="col">
            <a class="terug" href="index.php">Terug</a>
          </div>
        </div>

      </div>
      <div class="green"></div>
    </div>
  </body>
</html>
