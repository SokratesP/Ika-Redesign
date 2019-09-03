<?php require 'config.php'?>

<!DOCTYPE html>

<html>
  
  <head>
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $page_name; ?></title>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/index.css" type="text/css"/>
    
    <link href="css/heroic-features.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/flatly/bootstrap.min.css">
    
    <link rel="icon" href="../images/flower.ico">
    
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css"/>
    <!-- jQuery and Bootstrap's JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </head>
  
  <body>
<!--     <div class="wrap">
    <div id="main" class="clear-top"> -->
    <!-- Navigation -->
    <div class="up">
      <div class="row">
        <div class="upImg col-4" style="padding-right: 0.625em;">
          <a href="index.php">
          <img src="../images/logo.png" width="186" height="70">
          </a>
        </div>
        
        <div class="upTitle col-6">
          <h1 style="margin-left: 1em;">IKA</h1>
        </div>
        
        <div class="upLogIn col-2">
          <?php if ($user != null): ?>
          <div class="logedin">
            <?php echo "<a style='color: white; margin-right:0.938em;font-weight:400;font-size:1.625em; ' href='profile.php'> ".ucfirst($user['first_name']).'</a>'?>
            <a class="btn btn-danger" style="margin-left: 1.875em;  " href="logout.php">Έξοδος</a>
          </div>
          
          <?php else: ?>
          <button class="btn btn-success"  onclick="document.getElementById('id01').style.display='block'">Είσοδος</button>
          <div id="id01" class="modal">
            <form class="modal-content animate" action="login.php" method="POST">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                  title="Close Modal">&times;</span>
                <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
              </div>
              <div class="container-log">
                <label><b>Όνομα Χρήστη</b></label>
                <input type="text" name="username" required>
                <label><b>Κωδικός</b></label>
                <input type="password" name="password" required>
                <button class="btn btn-success" type="submit">Είσοδος</button>
                <input type="checkbox"> Να με θυμάσαι.
              </div>
              <div class="container-log" style="background-color:#f1f1f1">
                <button class="btn btn-danger" type="button"
                  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Ακ΄θρωση
                </button>
                <span class="psw"> <a href="404.html">Ξέχασα τον κωδικό μου!</a></span>
              </div>
            </form>
          </div>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Ελληνικά</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              </button>
              <div class="dropdown-menu mydr" aria-labelledby="btnGroupDrop1" x-placement="bottom-start">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">Deutsch</a>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php if ($user == null): ?>
          <br/>
          <font size="2"><a href="register.php">Δεν έχω λογαριασμό</a></font>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="navbar1">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-md-12" style="position: sticky;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
          aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $page_name == 'index' ? 'active' : '' ?>">
              <a class="nav-link" href="../pages/index.php">Αρχική</a>
            </li>
            <li class="nav-item">
              <?php
              if (empty($user['user_type'])) {
                  $cat = 'gen';
              } else {
                  $cat = $user['user_type'];
              }
              ?>
              <a class="nav-link" href=<?php echo 'perhome.php?cat='.$cat; ?>>Υπηρεσίες</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/contact.php">Χρήσιμες Πληροφορίες</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/404.html">Βοήθεια</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Αναζήτηση">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Αναζήτηση</button>
          </form>
        </div>
      </nav>
    </div>
    

