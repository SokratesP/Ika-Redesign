<?php
$page_name = 'Ικα Αίτηση';
   include '../inc/header.php';
?>
<?php
$validation_errors = [];
$message = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $validation_errors[] = 'Το Όνομα είναι υποχρεωτικό.';
    } else {
        $query = 'SELECT COUNT(*) AS count FROM pensions WHERE name = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $_POST['name']);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();
        if ($results['count'] > 0) {
            $validation_errors[] = 'Έχει καταχωρηθεί ήδη αίτηση για αυτό το πρόσωπο.';
        }
    }

    if (empty($_POST['ensima'])) {
        $validation_errors[] = 'Ο αριθμός των ενσύμων είναι υποχρεωτικος. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.';
    } elseif (!is_numeric($_POST['ensima'])) {
        $validation_errors[] = 'Μη έγκυρος αριθμός.';
    }

    if (empty($_POST['hmeresd'])) {
        $validation_errors[] = 'Ο αριθμός των ημερών εργασίας είναι υποχρεωτικος. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.';
    } elseif (!is_numeric($_POST['hmeresd'])) {
        $validation_errors[] = 'Μη έγκυρος αριθμός.';
    }

    // If no errors exist
    if (empty($validation_errors)) {
        $query = 'INSERT INTO pensions (id,name,ensima,hmeresd) VALUES (?, ?, ?,?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param('isii',
            $_POST[$user['id']],
            $_POST['name'],
            $_POST['ensima'],
            $_POST['hmeresd']
        );
        $stmt->execute();
        header('Location: success.php?id=2');
    }
}?>


<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
  <li class="breadcrumb-item"><a href=<?php echo 'perhome.php?cat='.$user['user_type']; ?> >Ηλεκτρονικές Υπηρεσίες</a></li>
  <li class="breadcrumb-item  active">Αίτηση Συνταξιοδότησης</li>
</ol>

<?php if (count($validation_errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($validation_errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


<div class="tittle">
	<h2 align="center">Υποβολή Αίτησης Συνταξιοδότησης</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
  <form class="form-horizontal" method="POST">
    <fieldset>
      <!-- Text input-->
      <div class="form-group row">
        <label class="col-md-4 control-label" for="name" style="text-align: center;">Όνομα</label>  
          <div class="col-md-4">
            <input id="name" name="name" type="text" value="<?php echo $user['first_name'].' '.$user['last_name']; ?>" class="form-control input-md"> 
          </div>
      </div>

      <!-- Text input-->
      <div class="form-group row">
        <label class="col-md-4 control-label" for="ensima" style="text-align: center;">Συνολικός Αριθμός Ενσύμων</label>  
          <div class="col-md-4">
            <input id="ensima" name="ensima" type="text" class="form-control input-md" >
            <span class="help-block">Εισάγετε τον αριθμό των ενσύμων που έχετε.</span>  
          </div>
      </div>
      <!-- Text input-->
       <div class="form-group row">
        <label class="col-md-4 control-label" for="hmeresd" style="text-align: center;">Συνολικός Αριθμός Ημερών Εργασίας</label>  
          <div class="col-md-4">
            <input id="hmeresd" name="hmeresd" type="text" class="form-control input-md">
            <span class="help-block">Εισάγετε τον αριθμό των ημερών που έχετε δουλέψει.</span>  
          </div>
      </div>
      <!-- Button -->
      <div class="form-group row">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4" style="align-content: center;">
          <button type="submit" id="button2id" name="button2id" class="btn btn-success">Υποβολή</button>
        </div>
      </div>

    </fieldset>
  </form>
  </div>
</div>
</div>

<?php include '../inc/footer.php'?>
