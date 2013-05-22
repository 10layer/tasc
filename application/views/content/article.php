<?php
	$this->load->view("templates/header");
?>
<div class="container page">
	<div class="row">
		<div class="span10 offset1">
			<h1><?= $content->title ?></h1>
			
		</div>
	</div>
	<div class="row">
		<div class="span9 offset1">
			<div class="lead underline">
				<?= $content->blurb ?>
			</div>
			<div class="body"><?= $content->body ?></div>
		</div>
	</div>
</div>

<?php
	$this->load->view("templates/footer");
?>