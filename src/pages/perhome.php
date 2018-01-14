<?php
   $page_name = "Ικα Υπηρεσίες";
   include("../inc/header.php");
?>

<link rel="stylesheet" href="../css/perhome.css" type="text/css"/>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="perhome.php?cat=gen">Ηλεκτρονικές Υπηρεσίες</a></li>
</ol>
<div class="container">
	<h2 align="center" class="pagetitle">Ηλεκτρονικές Υπηρεσίες</h2>
</div>

<?php if (/*$user['user_type'] == "syntaksiouxos" or*/ $_GET['cat'] =="syntaksiouxos" ): ?>	
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="pension.php" class="link" target="blank">
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
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					    		<p class="card-text">Έδω θα βρείτε δίαφορες υπηρεσίες που είναι διαθέσιμες απο το ΙΚΑ.</p>   
					    	</div>
						</div>
					</div>
				</a>
			</div>
	</div>
</div>

<?php elseif ( /*$user['user_type'] == "ergodotis" or*/ $_GET['cat'] =="ergodotis"): ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  			<h4 class="card-title" >Μαζική Ταυτοποίηση Ασφαλισμένων</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
				  			<h4 class="card-title">Ηλεκτρονική Υποβολή Α.Π.Δ.</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					  		<h4 class="card-title">Οικονομική Καρτέλα Εργοδότη</h4>
					  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
						  		<h4 class="card-title">Βεβαίωση Ασφαλιστικής Ενημερότητας</h4>
						  	</div>
					  	</div>
					  	<div class="card-body text-primary">
					  		<div class="mycardclass">
						    	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					  			<h4 class="card-title">Ηλεκτρονική Έκδοση Ατομικού Λογαριασμού Ασφάλισης</h4>
					  		</div>
					  	</div>
					  	<div class="card-body text-primary">
					  		<div class="mycardclass">
					    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					    		<p class="card-text">Έδω θα βρείτε δίαφορες υπηρεσίες που είναι διαθέσιμες απο το ΙΚΑ.</p>   
					    	</div>
						</div>
					</div>
				</a>
			</div>
	</div>
</div>

<?php elseif (/*$user['user_type'] == "asfalismenos" or*/ $_GET['cat'] =="asfalismenos"): ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="404.html" class="link" target="blank">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
				  	<div class="card-header" >
				  		<div class="myclass">
				  			<h4 class="card-title" >Πιστοποίηση Ασφαλισμένου</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
				  			<h4 class="card-title">Απογραφή και Απόδοση Ασφαλιστικής Ικανότητας Έμμεσα Ασφαλισμένων</h4>
				  		</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					  		<h4 class="card-title">Εξέλιξη Αιτήματος Απογραφής και Απόδοσης Ασφαλιστικής Ικανότητας</h4>
					  	</div>
				  	</div>
				  	<div class="card-body text-primary">
				  		<div class="mycardclass">
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
						  		<h4 class="card-title">	Ασφαλιστική Ικανότητα</h4>
						  	</div>
					  	</div>
					  	<div class="card-body text-primary">
					  		<div class="mycardclass">
						    	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					  			<h4 class="card-title">Lorem ipsum</h4>
					  		</div>
					  	</div>
					  	<div class="card-body text-primary">
					  		<div class="mycardclass">
					    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					    		<p class="card-text">Έδω θα βρείτε δίαφορες υπηρεσίες που είναι διαθέσιμες απο το ΙΚΑ.</p>   
					    	</div>
						</div>
					</div>
				</a>
			</div>
	</div>
</div>

<?php elseif($_GET['cat'] =="gen"):?>
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
				    		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in mi erat.</p>
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
					    		<p class="card-text">Έδω θα βρείτε δίαφορες υπηρεσίες που είναι διαθέσιμες απο το ΙΚΑ.</p>   
					    	</div>
						</div>
					</div>
				</a>
			</div>
	</div>
</div>
<?php endif; ?>

</div></div></div></div>

<?php include("../inc/footer.php") ?>