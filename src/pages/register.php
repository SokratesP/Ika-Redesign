<?php
$page_name = 'Εγγραφή';
include '../inc/config.php';

// If the user is logged in, there is no reason for him to register again
// Redirect to home page
if ($user != null) {
    header('Location: index.php');
}

$validation_errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // This means that the form has just been submitted

    // Validate user input and create a new user

    if (empty($_POST['first_name'])) {
        $validation_errors[] = 'Το Όνομα είναι υποχρεωτικό.';
    } elseif (mb_strlen($_POST['first_name']) > 255) {
        $validation_errors[] = 'Το Όνομα δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.';
    }

    if (empty($_POST['last_name'])) {
        $validation_errors[] = 'Το Επώνυμο είναι υποχρεωτικό.';
    } elseif (mb_strlen($_POST['last_name']) > 255) {
        $validation_errors[] = 'Το Επώνυμο δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.';
    }

    if (empty($_POST['afm'])) {
        $validation_errors[] = 'Το ΑΦΜ είναι υποχρεωτικό.';
    } elseif (!is_numeric($_POST['afm'])) {
        $validation_errors[] = 'Το ΑΦΜ πρέπει να αποτελείται μόνο απο νούμερα.';
    } elseif (mb_strlen($_POST['afm']) > 10) {
        $validation_errors[] = 'Το ΑΦΜ δεν πρέπει να υπερβαίνει τους 9 χαρακτήρες.';
    }

    if (empty($_POST['amka'])) {
        $validation_errors[] = 'Το ΑΜΚΑ είναι υποχρεωτικό.';
    } elseif (!is_numeric($_POST['amka'])) {
        $validation_errors[] = 'Το ΑΜΚΑ πρέπει να αποτελείται μόνο απο νούμερα.';
    } elseif (mb_strlen($_POST['amka']) > 12) {
        $validation_errors[] = 'Το ΑΜΚΑ δεν πρέπει να υπερβαίνει τους 11 χαρακτήρες.';
    }

    if (empty($_POST['user_type'])) {
        $validation_errors[] = 'Η Ιδιότητα είναι υποχρεωτική.';
    } elseif (!in_array($_POST['user_type'], ['syntaksiouxos', 'asfalismenos', 'ergodotis'])) {
        $validation_errors[] = 'Επιλέξτε μία έγκυρη Ιδιότητα.';
    }

    if (empty($_POST['username'])) {
        $validation_errors[] = 'Το Όνομα Χρήστη είναι υποχρεωτικό.';
    } elseif (mb_strlen($_POST['username']) > 255) {
        $validation_errors[] = 'Το Όνομα Χρήστη δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.';
    } else {
        $query = 'SELECT COUNT(*) AS count FROM users WHERE username = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();
        if ($results['count'] > 0) {
            $validation_errors[] = 'Το Όνομα Χρήστη που εισάγατε χρησιμοποιείται ήδη.';
        }
    }

    if (empty($_POST['password'])) {
        $validation_errors[] = 'Ο Κωδικός είναι υποχρεωτικός.';
    } elseif (mb_strlen($_POST['password']) < 8) {
        $validation_errors[] = 'Ο Κωδικός πρέπει να είναι τουλάχιστον 8 χαρακτήρες.';
    } elseif (mb_strlen($_POST['password']) > 255) {
        $validation_errors[] = 'Ο Κωδικός δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.';
    }

    if (empty($_POST['email'])) {
        $validation_errors[] = 'Το Email είναι υποχρεωτικό.';
    } elseif (mb_strlen($_POST['email']) > 255) {
        $validation_errors[] = 'Το Email δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $validation_errors[] = 'Το Email που εισάγατε δεν είναι έγκυρο.';
    } else {
        $query = 'SELECT COUNT(*) AS count FROM users WHERE email = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();
        if ($results['count'] > 0) {
            $validation_errors[] = 'Το Email που εισάγατε χρησιμοποιείται ήδη.';
        }
    }

    if (empty($validation_errors)) {
        $query = 'INSERT INTO users (username, password, email, first_name, last_name, afm, amka, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param('ssssssss',
            $_POST['username'],
            md5($_POST['password']),
            $_POST['email'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['afm'],
            $_POST['amka'],
            $_POST['user_type']
        );
        $stmt->execute();
        $user_id = $con->insert_id;

        // Login as the new user automatically and redirect to home page
        $_SESSION['user_id'] = $user_id;
        header('Location: index.php');
    }
}
include '../inc/header.php';
?>

    <div class="container">
        <h3 class="breadcrump">Δημιουργία Λογαρισμού</h3>

        <?php if (count($validation_errors) > 0): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($validation_errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST">
                    <p>Τα πεδία με αστερίσκο (*) είναι υποχρεωτικά.</p>

                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="first_name">Όνομα*</label>
                            <div class="col-md-6">
                                <input id="first_name" name="first_name" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="last_name">Επώνυμο*</label>
                            <div class="col-md-6">
                                <input id="last_name" name="last_name" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="afm">Α.Φ.Μ. *</label>
                            <div class="col-md-6">
                                <input id="afm" name="afm" type="text" placeholder="1234567890"
                                       class="form-control-si input-md">
                                <span class="help-block">Αριθμός Φορολογικού Μητρώου</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="amka">Α.Μ.Κ.Α. *</label>
                            <div class="col-md-6">
                                <input id="amka" name="amka" type="text" placeholder=""
                                       class="form-control-si input-md">
                                <span class="help-block">Αριθμός Μητρώου Κοινωνικής Ασφάλισης</span>
                            </div>
                        </div>
                        <!-- Multiple Radios -->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="user_type">Ιδιότητα*</label>
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
                                        <input type="radio" name="user_type" id="ergodotis" value="ergodotis">
                                        Εργοδότης
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="username">Όνομα Χρήστη*</label>
                            <div class="col-md-6">
                                <input id="username" name="username" type="text" class="form-control-si input-md">
                                <span class="help-block">Το όνομα που θα χρησιμοποείτε για την σελίδα</span>
                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="password">Κωδικός*</label>
                            <div class="col-md-6">
                                <input id="password" name="password" type="password" class="form-control-si input-md">
                                <span class="help-block">Τουλάχιστον 8 χαρακτήρες</span>
                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="password_confirmation">Επαλήθευση
                                Κωδικού*</label>
                            <div class="col-md-6">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                       class="form-control-si input-md">
                                <span class="help-block">Επαναλάβετε τον κωδικό που βάλατε στο προηγούμενο πεδίο</span>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="email">E-Mail*</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="text" class="form-control-si input-md">
                            </div>
                        </div>
                        <!-- Button (Double) -->
                        <div class="form-group-si row">
                            <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8">
                                <a href="index.php" class="btn btn-danger">Ακύρωση</a>
                                <button type="submit" id="button2id" name="button2id" class="btn btn-success">
                                    Υποβολή
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    
<?php include '../inc/footer.php'?>