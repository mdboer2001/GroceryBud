<?php
session_start();
require_once("dbconfig.php");
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }

  $username = $_SESSION["user"];
?>


<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
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
          <?php if(isset($username)) { echo "Welkom: " , $username; }else{ echo "Klant";} ?>

          <?php/* if(isset($username)) { echo $username; }else{ echo "Klant";} */?>
          <div class="dropdown">
            <a href="#"><img src="img/usr/user.png" class="user_pic"></a>
            <div class="dropdown-content">
              <a href="profile.php">Persoonlijke informatie</a>
              <a href="#">Wachtwoord veranderen</a><br>
              <a href="logout.php">Log uit</a>
            </div>
          </div>
      </div>
    </nav>
    <div class="row">
    <div class="col"></div>
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




  </body>
 </html>
