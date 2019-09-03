<?php
   $page_name = 'ΙΚΑ Επιτυχια';

   include '../inc/header.php';
?>

<?php if ($_GET['id'] == 1): ?>
<div class="container" style="margin-bottom: 15em;margin-top: 15em;">
	<div class="alert alert-dismissible alert-success" style="width: 90%; margin: 0 auto;text-align:center;">
	  <strong>Επιτυχία! <br/></strong> Τα στοιχεία σας εχουν αλλαξει. <br/>
	  <a href="profile.php" class="alert-link">Πίσω στο προφιλ</a>.
	</div>
</div>
<?php elseif ($_GET['id'] == 2):?>
<div class="container" style="margin-bottom: 15em;margin-top: 15em;">
	<div class="alert alert-dismissible alert-success" style="width: 90%; margin: 0 auto;text-align:center;">
	  <strong>Επιτυχία! <br/></strong> Η αίτηση υποβλήθηκε με επιτυχία. <br/>
	  <a href="index.php" class="alert-link">Επιστροφή στην αρχική.</a>.
	</div>
</div>
<?php endif; ?>
<?php include '../inc/footer.php'?>