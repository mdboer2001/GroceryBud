
<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="img/logo.png" class="logonavbar"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">

        </ul>
        
          <?php/* if(isset($username)) { echo $username; }else{ echo "Klant";} */?>
          <div class="dropdown">
            <a href="#"><img src="img/usr/user.png" class="user_pic"></a>
            <div class="dropdown-content">
              <a href="#">Persoonlijke informatie</a>
              <a href="#">Wachtwoord veranderen</a>
              <a href="#">Log uit</a>
            </div>
          </div>
      
      </div>
    </nav>





  </body>
 </html>
