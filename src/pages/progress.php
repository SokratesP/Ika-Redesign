<?php
   $page_name = 'Ικα Παρακολούθηση';
   include '../inc/header.php';

$validation_errors = [];
$message = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $validation_errors[] = 'Το Όνομα είναι υποχρεωτικό.';
    } else {
        $query = 'SELECT pro AS res FROM pensions WHERE name = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $_POST['name']);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();
        if ($results['res'] == 0) {
            $message[] = 'Σε επεξεργασια.';
        } elseif ($result['res'] == 1) {
            $message[] = 'Εγκριθηκε.';
        }

        header('Location: progress.php');
    }
}?>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
  <li class="breadcrumb-item"><a href=<?php echo 'perhome.php?cat='.$user['user_type']; ?> >Ηλεκτρονικές Υπηρεσίες</a></li>
  <li class="breadcrumb-item  active">Πορεία της Αίτησης Συνταξιοδότησης</li>
</ol>

<div class="tittle">
	<h2 align="center">Παρακολούθηση της Πορείας της Αίτησης Συνταξιοδότησης</h2>
</div>

<?php if (count($validation_errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($validation_errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (count($message) > 0): ?>
    <div class="alert alert-dismissible alert-success" role="success">
        <ul>
            <?php foreach ($message as $mess): ?>
                <li><?= $mess ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" method="POST">
				<fieldset>
					<div class="form-group row">
						<label class="col-md-4 control-label" for="name" style="text-align: center;">Ονομα</label>  
						<div class="col-md-4">
							<input id="name" name="name" type="text" value="<?php echo $user['first_name'].' '.$user['last_name']; ?>" class="form-control input-md"> 
						</div>
					</div>
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