<?php
	$this->load->view("templates/header");
?>
<div class="container page">
	<div class="row">
		<div class="span10 offset1">
			<h1><?= $content->title ?></h1>
			<?= $content->body ?>
		</div>
	</div>
</div>

<?php
	$this->load->view("templates/footer");
?>