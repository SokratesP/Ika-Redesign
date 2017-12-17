<!DOCTYPE html>
<?php

session_start();

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome!</title>
  </head>

  <body>

    <h1>Welcome <?php echo $_SESSION['login_user']; ?></h1>
    <h2><a href = "logout.php">Sign Out</a><h2>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "test";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      #$sql = "SELECT * FROM myusers WHERE username='".$_SESSION['login_user'];."'";
      $result = mysqli_query($conn, "SELECT * FROM `myusers` WHERE `username`='$_SESSION['user_id'];'");

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "mess: " . $row["mess"] . "<br>";
          }
      } else {
          echo "0 results";
      }

      mysqli_close($conn);
      ?>

  </body>

</html>
