<?php
   $page_name = "ΙΚΑ Προφίλ";
   include("../inc/header.php");
?>
<link rel="stylesheet" href="../css/profile.css" type="text/css"/>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="perhome.php">Αρχική</a></li>
  <li class="breadcrumb-item active">Προφίλ</li>
</ol>

<h1 align="center">Προφιλ</h1>

<?php if ($user['user_type'] == "syntaksiouxos"): ?>
	
<?php endif; ?>

<?php include("../inc/footer.php") ?>