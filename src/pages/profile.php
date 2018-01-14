<?php
   $page_name = "ΙΚΑ Προφίλ";

   include("../inc/header.php");
$validation_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["first_name"]))
        $validation_errors[] = "Το Όνομα είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (mb_strlen($_POST["first_name"]) > 255)
        $validation_errors[] = "Το Όνομα δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";


    if (empty($_POST["last_name"]))
        $validation_errors[] = "Το Επώνυμο είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (mb_strlen($_POST["last_name"]) > 255)
        $validation_errors[] = "Το Επώνυμο δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";

    if (empty($_POST["afm"]))
        $validation_errors[] = "Το ΑΦΜ είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (!is_numeric($_POST["afm"]))
        $validation_errors[] = "Το ΑΦΜ πρέπει να αποτελείται μόνο απο νούμερα.";
    elseif (mb_strlen($_POST["afm"]) > 10) 
        $validation_errors[] = "Το ΑΦΜ δεν πρέπει να υπερβαίνει τους 9 χαρακτήρες.";     

    if (empty($_POST["amka"]))
        $validation_errors[] = "Το ΑΜΚΑ είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (!is_numeric($_POST["amka"]))
        $validation_errors[] = "Το ΑΜΚΑ πρέπει να αποτελείται μόνο απο νούμερα.";
    elseif(mb_strlen($_POST["amka"]) > 12)
        $validation_errors[] = "Το ΑΜΚΑ δεν πρέπει να υπερβαίνει τους 11 χαρακτήρες.";

    if (empty($_POST["user_type"]))
        $validation_errors[] = "Η Ιδιότητα είναι υποχρεωτική. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (!in_array($_POST["user_type"], ["syntaksiouxos", "asfalismenos", "ergodotis"]))
        $validation_errors[] = "Επιλέξτε μία έγκυρη Ιδιότητα.";

    if (empty($_POST["username"]))
        $validation_errors[] = "Το Όνομα Χρήστη είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (mb_strlen($_POST["username"]) > 255)
        $validation_errors[] = "Το Όνομα Χρήστη δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";
    
    if (md5($_POST["password"]) == $user['password']){
        if (empty($_POST["new_password"]))
            $validation_errors[] = "Ο Κωδικός είναι υποχρεωτικός.";
        elseif (mb_strlen($_POST["new_password"]) < 8)
            $validation_errors[] = "Ο Κωδικός πρέπει να είναι τουλάχιστον 8 χαρακτήρες.";
        elseif (mb_strlen($_POST["new_password"]) > 255)
            $validation_errors[] = "Ο Κωδικός δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";
    }else
        $validation_errors[]= "Ο παλιός κωδικός δεν είναι σωστός";

    if (empty($_POST["email"]))
        $validation_errors[] = "Το Email είναι υποχρεωτικό. Παρακαλώ ελέγξτε πάλι τα στοιχεία σας.";
    elseif (mb_strlen($_POST["email"]) > 255)
        $validation_errors[] = "Το Email δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.";
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        $validation_errors[] = "Το Email που εισάγατε δεν είναι έγκυρο.";



	if (empty($validation_errors)) {
		$id = $user['id'];
        $query = "UPDATE users SET USERNAME = ? , FIRST_NAME = ? , LAST_NAME = ? , AFM = ? , AMKA = ? , USER_TYPE = ? , EMAIL = ?, PASSWORD = ? WHERE ID = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssssssssi",
        	$_POST["username"],
        	$_POST["first_name"],
        	$_POST["last_name"],
        	$_POST["afm"],
        	$_POST["amka"],
        	$_POST["user_type"],
        	$_POST["email"],
            md5($_POST["new_password"]),
            $id
        );
        $stmt->execute();
        header("Location: success.php?id=1");
    }
}
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href=<?php echo "perhome.php?cat=". $user['user_type'];?> >Ηλεκτρονικές Υπηρεσίες</a></li>
  <li class="breadcrumb-item active">Προφίλ</li>
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

<div class="container" style="padding-bottom:1.3em;">
    <h1 align="center" >Προφίλ</h1>
</div>



<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="first_name" style="text-align: center;">όνομα</label>
                            <div class="col-md-6">
                                <input id="first_name" name="first_name" value="<?php echo $user['first_name'];?>" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="last_name" style="text-align: center;">Επώνυμο</label>
                            <div class="col-md-6">
                                <input id="last_name" name="last_name" value="<?php echo $user['last_name'];?>" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row"  style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label" for="afm" style="text-align: center;">Α.Φ.Μ. </label>
                            <div class="col-md-6">
                                <input id="afm" name="afm" value="<?php echo $user['afm'];?>" type="text" placeholder="1234567890"
                                       class="form-control input-md">
                                <span class="help-block">Αριθμός Φορολογικού Μητρώου</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row"  style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label"  for="amka" style="text-align: center;">Α.Μ.Κ.Α.</label>
                            <div class="col-md-6">
                                <input id="amka" name="amka" value="<?php echo $user['amka'];?>" type="text"
                                       class="form-control input-md">
                                <span class="help-block">Αριθμός Μητρώου Κοινωνικής Ασφάλισης</span>
                            </div>
                        </div>
                        
                        <div class="form-group row"  >
                            <label class="col-md-4 control-label" for="user_type" style="text-align: center;">Ιδιότητα</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label for="syntaksiouxos">
                                        <input type="radio" name="user_type" id="syntaksiouxos" value="syntaksiouxos">
                                        Συνταξιούχος
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="asfalismenos">
                                        <input type="radio" name="user_type" id="asfalismenos" value="asfalismenos">
                                        Ασφαλισμένος
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="ergodotis">
                                        <input type="radio" name="user_type" id="ergodotis" value="ergodotis" >
                                        Εργοδότης
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row"  style="padding-bottom:0.7em;">
                            <label class="col-md-4 control-label" for="username" style="text-align: center;">Όνομα Χρήστη</label>
                            <div class="col-md-6">
                                <input id="username" name="username" value="<?php echo $user['username'];?>" type="text" class="form-control input-md">
                                <span class="help-block">Το όνομα που θα χρησιμοποείτε για την σελίδα</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="password" style="text-align: center;">Παλιός κωδικός</label>
                            <div class="col-md-6">
                                <input id="password" name="password" type="password" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="new_password" style="text-align: center;">Νέος κωδικός</label>
                            <div class="col-md-6">
                                <input id="new_password" name="new_password" type="password"
                                       class="form-control input-md">
                                <span class="help-block">Τουλάχιστον 8 χαρακτήρες</span>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="password_confirmation" style="text-align: center;">Επαλήθευση νέου κωδικού</label>
                            <div class="col-md-6">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                       class="form-control input-md">
                                <span class="help-block">Επαναλάβετε τον κωδικό που βάλατε στο προηγούμενο πεδίο</span>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 control-label" for="email" style="text-align: center;">E-Mail</label>
                            <div class="col-md-6">
                                <input id="email" name="email" value="<?php echo $user['email'];?>" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Button (Double) -->
                        <div class="form-group row"  style="padding-bottom: 2em;">
                            <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8" style="align-content: center;">
                                <button type="submit" id="button2id" name="button2id" class="btn btn-success" >
                                    Επεξεργασία
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include("../inc/footer.php") ?>