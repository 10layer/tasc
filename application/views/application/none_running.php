<?php
	$this->load->view("templates/header");
?>

<div class="container">
	<h1>Apply</h1>
	
	<div class="alert alert-warning alert-block">
		<h3>No competitions currently running</h3>
		<?php
		if (!empty($next_competition)) {
		?>
		<p>Submissions for <strong><?= $next_competition->title ?></strong> will start on <?= date("l, j F, Y", $next_competition->submission_start_date) ?></p>
		<?php
		}
		?>
	</div>
	
</div>

<?php
	$this->load->view("templates/footer");
?>