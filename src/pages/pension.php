<?php
   $page_name = "Ικα Αίτηση";
   include("../inc/header.php");
?>
<?php

$validation_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // If no errors exist, go ahead and create the user.
    if (empty($validation_errors)) {
    	$id=$user['id'];
        $query = "INSERT INTO pensions (onoma,poso,id) VALUES (?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssi",
            $_POST["onoma"],
            $_POST["poso"],
            $_POST[$user['id']]
        );
        $stmt->execute();
        /*header("Location: index.php");*/
    }
}?>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
  <li class="breadcrumb-item"><a href="perhome.php?cat=gen">Ηλεκτρονικές Υπηρεσίες</a></li>
  <li class="breadcrumb-item  active">Αίτηση Συνταξιοδότησης</li>
</ol>

<div class="tittle">
	<h2 align="center">Υποβολή Αίτησης Συνταξιοδότησης</h2>
</div>

<div class="conteiner">
	<form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="onoma">Text Input</label>  
  <div class="col-md-4">
  <input id="onoma" name="onoma" type="text" placeholder="dsfg" class="form-control input-md" required="">
  <span class="help-block">helpsdfg</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="poso">Text Input</label>  
  <div class="col-md-4">
  <input id="poso" name="poso" type="text" placeholder="placeholder" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button type="submit" id="button2id" name="button2id" class="btn btn-success">
                                    Υποβολη
                                </button>
  </div>
</div>

</fieldset>
</form>

</div>
<?php include("../inc/footer.php") ?>
