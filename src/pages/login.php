<?php
  require("../inc/config.php");
  
  // User has logged in, no need to log in again.
  if ($user != null)
      header("Location: index.php");
  
  $validation_errors = [];
  
  // Check if the form has been POSTed
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Validate user input
      if (empty($_POST["username"]))
          $validation_errors[] = "Το Όνομα Χρήστη είναι υποχρεωτικό.";
  
      if (empty($_POST["password"])) {
          $validation_errors[] = "Ο Κωδικός Πρόσβασης είναι υποχρεωτικός.";
      }
  
      // If there are no errors, look the user up in the database
      if (empty($validation_errors)) {
          $username = sanitize($_POST["username"]);
          $password_hash = md5(sanitize($_POST["password"]));
          $query = "SELECT * FROM users WHERE username = ? AND password = ?";
          $stmt = $con->prepare($query);
          $stmt->bind_param("ss", $username, $password_hash);
          $stmt->execute();
          $user = $stmt->get_result()->fetch_assoc();
          if ($user == null) {
              $validation_errors[] = "Τα στοιχεία που εισάγατε δεν είναι έγκυρα. Παρακαλούμε προσπαθήστε ξανά.";
          } else {
              $_SESSION["user_id"] = $user["id"];
              header("Location: perhome.php");
          }
      }
  }
  ?>
<?php
  $page_name = "login";
  require("../inc/header.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Σύνδεση</h3>
      <form class="form-horizontal" method="POST">
        <?php if (count($validation_errors) > 0): ?>
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php foreach ($validation_errors as $error): ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
        <div class="form-group">
          <label for="username" class="col-sm-4 control-label">Όνομα Χρήστη</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" name="username">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-4 control-label">Κωδικός Πρόσβασης</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <p>Δεν έχετε λογαριασμό; <a href="register.php">Εγγραφείτε εδώ!</a></p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Σύνδεση</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require("../inc/footer.php"); ?>