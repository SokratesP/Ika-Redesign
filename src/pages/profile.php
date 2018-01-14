<?php
   $page_name = "ΙΚΑ Προφίλ";

   include("../inc/header.php");
$validation_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["first_name"]))
        $validation_errors[] = "Το Όνομα είναι υποχρεωτικό.";
    elseif (mb_strlen($_POST["first_name"]) > 255)
        $validation_errors[] = "Το Όνομα δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";


    if (empty($_POST["last_name"]))
        $validation_errors[] = "Το Επώνυμο είναι υποχρεωτικό.";
    elseif (mb_strlen($_POST["last_name"]) > 255)
        $validation_errors[] = "Το Επώνυμο δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";

    if (empty($_POST["afm"]))
        $validation_errors[] = "Το ΑΦΜ είναι υποχρεωτικό.";
    elseif (!is_numeric($_POST["afm"]))
        $validation_errors[] = "Το ΑΦΜ πρέπει να αποτελείται μόνο απο νούμερα.";
    elseif (mb_strlen($_POST["afm"]) > 10) 
        $validation_errors[] = "Το ΑΦΜ δεν πρέπει να υπερβαίνει τους 9 χαρακτήρες.";     

    if (empty($_POST["amka"]))
        $validation_errors[] = "Το ΑΜΚΑ είναι υποχρεωτικό.";
    elseif (!is_numeric($_POST["amka"]))
        $validation_errors[] = "Το ΑΜΚΑ πρέπει να αποτελείται μόνο απο νούμερα.";
    elseif(mb_strlen($_POST["amka"]) > 12)
        $validation_errors[] = "Το ΑΜΚΑ δεν πρέπει να υπερβαίνει τους 11 χαρακτήρες.";

    if (empty($_POST["user_type"]))
        $validation_errors[] = "Η Ιδιότητα είναι υποχρεωτική.";
    elseif (!in_array($_POST["user_type"], ["syntaksiouxos", "asfalismenos", "ergodotis"]))
        $validation_errors[] = "Επιλέξτε μία έγκυρη Ιδιότητα.";

    if (empty($_POST["username"]))
        $validation_errors[] = "Το Όνομα Χρήστη είναι υποχρεωτικό.";
    elseif (mb_strlen($_POST["username"]) > 255)
        $validation_errors[] = "Το Όνομα Χρήστη δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";
    

    if (empty($_POST["email"]))
        $validation_errors[] = "Το Email είναι υποχρεωτικό.";
    elseif (mb_strlen($_POST["email"]) > 255)
        $validation_errors[] = "Το Email δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        $validation_errors[] = "Το Email που εισάγατε δεν είναι έγκυρο.";


	if (empty($validation_errors)) {
		$id = $user['id'];
        $query = "UPDATE users SET USERNAME = ? , FIRST_NAME = ? , LAST_NAME = ? , AFM = ? , AMKA = ? , USER_TYPE = ? , EMAIL = ? WHERE ID = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssssssi",
        	$_POST["username"],
        	$_POST["first_name"],
        	$_POST["last_name"],
        	$_POST["afm"],
        	$_POST["amka"],
        	$_POST["user_type"],
        	$_POST["email"],
            $id
        );
        $stmt->execute();
        header("Location: success.php");
    }
}
?>
<!-- <link rel="stylesheet" href="../css/profile.css" type="text/css"/> -->

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="perhome.php">Ηλεκτρονικές Υπηρεσίες</a></li>
  <li class="breadcrumb-item active">Προφίλ</li>
</ol>

<div class="container" style="padding-bottom:1.3em;">
	<h1 align="center" >Προφιλ</h1>
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


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="first_name" style="text-align: center;">Ονομα</label>
                            <div class="col-md-6">
                                <input id="first_name" name="first_name" value="<?php echo $user['first_name'];?>" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="last_name" style="text-align: center;">Επωνυμο</label>
                            <div class="col-md-6">
                                <input id="last_name" name="last_name" value="<?php echo $user['last_name'];?>" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row" style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label" for="afm" style="text-align: center;">Α.Φ.Μ. </label>
                            <div class="col-md-6">
                                <input id="afm" name="afm" value="<?php echo $user['afm'];?>" type="text" placeholder="1234567890"
                                       class="form-control-si input-md">
                                <span class="help-block">Αριθμος Φορολογικου Μητρωου</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row" style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label"  for="amka" style="text-align: center;">Α.Μ.Κ.Α.</label>
                            <div class="col-md-6">
                                <input id="amka" name="amka" value="<?php echo $user['amka'];?>" type="text"
                                       class="form-control-si input-md">
                                <span class="help-block">Αριθμος Μητρωου Κοινωνικης Ασφαλισης</span>
                            </div>
                        </div>
                        
                        <div class="form-group-si row" >
                            <label class="col-md-4 control-label" for="user_type" style="text-align: center;">Ιδιοτητα</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label for="syntaksiouxos">
                                        <input type="radio" name="user_type" id="syntaksiouxos" value="syntaksiouxos">
                                        Συνταξιουχος
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="asfalismenos">
                                        <input type="radio" name="user_type" id="asfalismenos" value="asfalismenos">
                                        Ασφαλισμενος
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="ergodotis">
                                        <input type="radio" name="user_type" id="ergodotis" value="ergodotis" >
                                        Εργοδοτης
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row" style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label" for="username" style="text-align: center;">Ονομα Χρηστη</label>
                            <div class="col-md-6">
                                <input id="username" name="username" value="<?php echo $user['username'];?>" type="text" class="form-control-si input-md">
                                <span class="help-block">Το ονομα που θα χρησιμοποειτε για την  σελιδα</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="email" style="text-align: center;">E-Mail</label>
                            <div class="col-md-6">
                                <input id="email" name="email" value="<?php echo $user['email'];?>" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Button (Double) -->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8" style="align-content: center;">
                                <button type="submit" id="button2id" name="button2id" class="btn btn-success">
                                    Επεξεργασία
                                </button>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include("../inc/footer.php") ?>