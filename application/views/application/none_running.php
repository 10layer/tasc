<?php
	$this->load->view("templates/header");
?>

<div class="container">
	<h1>Apply</h1>
	
	<div class="alert alert-warning alert-block">
		<h3>No competitions currently running</h3>
		<?php
			setlocale(LC_TIME, "fr_FR");
		?>
		<p>Submissions for <strong><?= $next_competition->french_title ?></strong> will start on <?= strftime("%A, %e %B, %Y", $next_competition->submission_start_date) ?></p>
	</div>
	
</div>

<?php
	$this->load->view("templates/footer");
?>