<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="3;url=./form.php" />
</head>
<body>
<h1>Log out successfully</h1>
<br/>
<h2>Redirecting in 3...</h2>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
