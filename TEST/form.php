<!DOCTYPE html>

<?php
  include("config.php");
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM myusers WHERE "

  }

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>My login page!</title>
  </head>
  <body>
    <form action="" method="post">
      UserName : <input type="text" name="username"><br>
      Passwrod : <input type="password" name="password"><br>
      <input type="submit" value=" Submit"><br>
    </form>
  </body>
</html>
