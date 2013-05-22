<?php
	$this->load->view("templates/header");
?>
<div class="container body">
	<div class="row underline">
		<div class="span12">
			<h1>African Story Challenge News</h1>
		</div>
	</div>
	<?php
	foreach($news as $item) {
	?>
	<div class="row underline">
		<div class="span9 offset2">
			<h2><?= anchor($item->content_type."/".$item->_id, $item->title) ?></h2>
			<?php
			if (!empty($item->blurb)) {
			?>
			<div class="lead">
				<?= $item->blurb ?>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<?php
	}
	?>
</div>
<?php
	$this->load->view("templates/footer");
?>