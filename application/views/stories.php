<?php
	$this->load->view("templates/header");
?>
<div class="container body">
	<div class="row">
		<div class="span11 offset1 underline">
			<h1>
				African Story Challenge Stories
				<?php
				if (isset($section)) {
				?>
				- <?= $section->title ?>
				<?php
				}
				?>
			</h1>
		</div>
	</div>
	<?php
	foreach($stories as $item) {
	?>
	<div class="row ">
		<div class="span10 offset2 underline">
			<h2><?= anchor($item->content_type."/".$item->_id."?api_key=$api_key", $item->title) ?></h2>
			<?php if (!empty($item->photo) && (is_array($item->photo))) {
				$photo = $item->photo[0];
			?>
			<div class="img-container pull-left" style="margin-right: 10px;">
			    <img alt="<?= $item->title ?> - Photo" src="<?= @photo($photo, 200, 100) ?>" />
		    </div>
			<?php
			}
			?>
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