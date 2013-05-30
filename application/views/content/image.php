<?php
	$this->load->view("templates/header");
?>
<div class="container page">
	<div class="row">
		<div class="span10 offset1">
			<h1><?= $content->title ?></h1>
			<?php
			if (!empty($content->blurb)) {
			?>
			<div class="lead underline">
				<?= $content->blurb ?>
			</div>
			<?php
			}
			?>
			<div class="body">
				<?php
				if (!is_array($content->image)) {
					$content->image = (Array) $image;
				}
				foreach($content->image as $image) {
				?>
				<div class="row">
					<div class="span12">
						<img src="<?= $image ?>" />
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php
	$this->load->view("templates/footer");
?>