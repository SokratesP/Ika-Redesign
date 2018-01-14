<?php
   $page_name = "ΙΚΑ Προφίλ";

   include("../inc/header.php");
$validation_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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
                                        <input type="radio" name="user_type" id="ergodotis" value="ergodotis">
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