<?php
   $page_name = "ΙΚΑ τετσ";
   include("../inc/header.php");
?> 
<link rel="stylesheet" href="../css/test.css" type="text/css"/>

<div class="conteiner">
  <!-- <div class="row"> -->

    <form class="form-validation" method="post" action="script.php">
        <div class="col-md-6">
          <div class="sub-entry">
              <h2>Person 1:</h2>
              <br>
              <div class="form-row form-input-name-row">
                  <label>
                      <span>Name</span>
                      <input name="field1" type="text">
                  </label>
              </div>
              <div class="form-row form-input-name-row">
                  <label>
                      <span>Age</span>
                      <input name="field2" type="text">
                  </label>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="sub-entry">
              <div class="main-content">
                  <h2>Person 2:</h2>
                  <br>
                  <div class="form-row form-input-name-row">
                      <label>
                          <span>Name</span>
                          <input name="field3" type="text">
                      </label>
                  </div>
                  <div class="form-row form-input-name-row">
                      <label>
                          <span>Age</span>
                          <input name="field4" type="text">
                      </label>
                  </div>
              </div>
          </div>
        </div>
    </form>
</div>

<div class="button">
    <button name="submit">Submit both forms</button>
</div>

<?php include("../inc/footer.php") ?>

<div class="form-group-si row" style="padding-bottom:1.3em;">
                            <label class="col-md-4 control-label"  for="amka" style="text-align: center;">Ιδιότητα</label>
                            <div class="col-md-6">
                                <p>
                Επιλέξτε μια απο τις ιδιότητες που σας αντιστοιχεί: 
                <select name="user_type">
                  <option value="none">Διαλεξτε μια ιδιότητα</option>
                  <option value="syntaksiouxos">Συνταξιουχος</option>
                  <option value="asfalismenos">Ασφαλισμενος</option>
                  <option value="ergodotis">Εργοδοτης</option>
                </select>
                </p>
                            </div>
                        </div>