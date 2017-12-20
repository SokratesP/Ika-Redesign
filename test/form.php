<!DOCTYPE html>

<?php
  include("config.php");
  session_start();
  $error = " ";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM myusers WHERE username = '$myusername' and passcode = '$mypassword' ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count  = mysqli_num_rows($result);

    if ($count == 1) {
      #sesssion_register("myusername");
      $_SESSION['login_user'] = $myusername;

      header("location: welcome.php");
    }else{
      $error = "Your login Name or Password is invalid";
    }

  }

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>My login page!</title>
  </head>

  <body>
    <div>

      <form action="" method="post">
        <label>UserName :</label><input type = "text" name = "username"/><br/><br/>
        <label>Passwrod :</label> <input type="password" name="password"/><br/><br/>
        <input type="submit" value=" Submit"/><br/>
      </form>

      <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

    </div>

  </body>
</html>
