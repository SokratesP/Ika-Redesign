<?php
   $page_name = "Ικα Αρχική";
   include("../inc/header.php");
?>

<link rel="stylesheet" href="../css/perhome.css" type="text/css"/>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="perhome.php">Ηλεκτρονικές Υπηρεσίες</a></li>
</ol>
<div class="container">
	<h2 align="center" class="pagetitle">Ηλεκτρονικές Υπηρεσίες</h2>
</div>

<?php if ($user['user_type'] == "syntaksiouxos" or $_SESSION['category'] =="syntaksiouxos" ): ?>
	
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  			<h4 class="card-title" >Υποβολή Αίτησης Συνταξιοδότησης</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Υποβολή αίτησης για την έκδοση σύνταξης.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Παρακολούθηση της Πορείας της Αίτησης Συνταξιοδότησης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να παρακολουθήσετε την πορεία του αιτήματος συνταξιοδότησης σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Οδηγός Θεμελίωσης Συνταξιοδοτικού Δικαιώματος</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="bottomrow">
		<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Εργαλείο Υπολογισμός Βασικού Ποσού Σύνταξης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να υπολογίσετε το βασικό ποσό της συνταξής σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Βεβαίωση Συντάξεων</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να εκτυπώσετε βεβαιώσεις για φορολογική χρήση.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Λοιπές Υπηρεσίες</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">δργσδγ</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php elseif ($user['user_type'] == "asfalismenos" or $_SESSION['category'] =="asfalismenos"): ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  			<h4 class="card-title" >Υποβολή Αίτησης Συνταξιοδότησης</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Υποβολή αίτησης για την έκδοση σύνταξης.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Παρακολούθηση της Πορείας της Αίτησης Συνταξιοδότησης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να παρακολουθήσετε την πορεία του αιτήματος συνταξιοδότησης σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Οδηγός Θεμελίωσης Συνταξιοδοτικού Δικαιώματος</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="bottomrow">
		<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Εργαλείο Υπολογισμός Βασικού Ποσού Σύνταξης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να υπολογίσετε το βασικό ποσό της συνταξής σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Βεβαίωση Συντάξεων</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να εκτυπώσετε βεβαιώσεις για φορολογική χρήση.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Λοιπές Υπηρεσίες</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">δργσδγ</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php elseif ($user['user_type'] == "ergodotis" or $_SESSION['category'] =="ergodotis"): ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  			<h4 class="card-title" >Υποβολή Αίτησης Συνταξιοδότησης</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Υποβολή αίτησης για την έκδοση σύνταξης.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Παρακολούθηση της Πορείας της Αίτησης Συνταξιοδότησης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να παρακολουθήσετε την πορεία του αιτήματος συνταξιοδότησης σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Οδηγός Θεμελίωσης Συνταξιοδοτικού Δικαιώματος</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="bottomrow">
		<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Εργαλείο Υπολογισμός Βασικού Ποσού Σύνταξης</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να υπολογίσετε το βασικό ποσό της συνταξής σας.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">	Βεβαίωση Συντάξεων</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Έδω μπορείτε να εκτυπώσετε βεβαιώσεις για φορολογική χρήση.</p>
				    </div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  		<h4 class="card-title">Λοιπές Υπηρεσίες</h4>
				  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">δργσδγ</p>
				    </div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php endif; ?>

<?php include("../inc/footer.php") ?>