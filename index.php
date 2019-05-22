<?php
session_start();
require_once("dbconfig.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }

  $username = $_SESSION["user"];

  if(isset($_GET["winkelkeuze"])) {
    switch ($_GET["winkelkeuze"]) {
      case "lidl":
        $winkel = "lidl";
        break;
      case "jumbo":
        $winkel = "jumbo";
        break;
      case "hvliet":
        $winkel = "hoogvliet";
        break;
      default:
        $winkel = "";
        break;
    }
  } else {
    $winkel = "";
  }

?>


<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <style media="screen">
      body{
        background: none;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 400px;" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <?php if(isset($username)) { echo "Welkom " , $username; }else{ echo "Klant";} ?>

          <?php/* if(isset($username)) { echo $username; }else{ echo "Klant";} */?>
          <div class="dropdown">
            <a href="#"><img src="img/usr/user.png" class="user_pic"></a>
            <div class="dropdown-content">
              <a href="profile.php">Persoonlijke informatie</a>
              <a href="forgotpassword.php">Wachtwoord veranderen</a><br>
              <a href="logout.php">Log uit</a>
            </div>
          </div>
      </div>
    </nav>
    <div class="row">
    <div id="winkel" class="col">
      <form class="winkel" method="post">
      <select class="winkelkeuze search-select" name="winkelkeuze" onchange="this.form.submit();">
        <option value="" hidden>Kies uw Supermarkt</option>
        <option value="lidl">Lidl</option>
        <option value="jumbo">Jumbo</option>
        <option value="hvliet">Hoogvliet</option>
      </select>
    </form>
    <form method="post">
      <select class="productkeuze search-select" name="productkeuze">
      <option value="" hidden>Kies je product</option>
      <?php
        $sql = "SELECT * FROM ".$winkel.";";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($product as $row) {
          echo "<option>".$row["pr_naam"]."</option>";
        }
       ?>
      </select>
    </form>
  </div>
      <div class="col"></div>
        <div class="col">
          <div class="winkelmandje">
            <h1>Boodschappenlijstje</h1>
              <div class="winkelproduct"></div>
              <div class="winkelproduct"></div>
              <div class="winkelproduct"></div>
              <div class="winkelproduct"></div>
              <div class="winkelproduct"></div>
          </div>
        </div>
    </div>

    <form class="budget">
      <h2>Vul hier je budget in</h2>
      <input type="number" min="0" max="1000" name="budget" placeholder>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
    $('.search-select').select2();
});
    </script>
  </body>
 </html>
