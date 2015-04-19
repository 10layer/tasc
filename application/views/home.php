<?php
	$this->load->view("templates/header");
?>
<div class="container body" id="homepage">
<div class="lead well">
	<p>The African Story Challenge (TASC) is a project of reporting grants set up to spur innovative multimedia storytelling by African journalists, with the aim of encouraging better policies and greater public engagement on issues that matter to Africans. During a two-year run (March 2013-March 2015), the project awarded 103 grants worth more than $500,000 to African journalists, resulting in nearly 300 in-depth and innovative stories circulated in major media across the continent. Below is a showcase of some of the stories developed around the themes of Agriculture, Health, Business and Technology.</p>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="span12 underline">
			<h2>Diseases: Prevention and Treatment</h2>
			<?php
			foreach($diseases as $item) {
			?>
			<div class="row ">
				<div class="span12">
					<h2><?= anchor($item->content_type."/".$item->_id, $item->title) ?></h2>
					<?php
					if (!empty($item->blurb)) {
					?>
					<div class="lead">
						<?php if (!empty($item->photo) && (is_array($item->photo))) {
							$photo = $item->photo[0];
						?>
						<div class="img-container pull-left" style="margin-right: 10px;">
						    <img alt="<?= $item->title ?> - Photo" src="<?= @photo($photo, 200, 100) ?>" />
					    </div>
						<?php
							

						}
						?>
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
			<a href="/stories/diseases">See all the Diseases: Prevention and Treatment stories</a>
			<!-- <a href="/stories">See all the stories</a> -->
		</div>
	</div>

	<div class="row">
		<div class="span12 underline">
			<h2>Business and Technology</h2>
			<?php
			foreach($business_tech as $item) {
			?>
			<div class="row ">
				<div class="span12">
					<h2><?= anchor($item->content_type."/".$item->_id, $item->title) ?></h2>
					<?php
					if (!empty($item->blurb)) {
					?>
					<div class="lead">
						<?php if (!empty($item->photo) && (is_array($item->photo))) {
							$photo = $item->photo[0];
						?>
						<div class="img-container pull-left" style="margin-right: 10px;">
						    <img alt="<?= $item->title ?> - Photo" src="<?= @photo($photo, 200, 100) ?>" />
					    </div>
						<?php
						}
						?>
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
			<a href="/stories/business">See all the Business and Technology stories</a>
			<!-- <a href="/stories">See all the stories</a> -->
		</div>
	</div>

	<div class="row">
		<div class="span12 underline">
			<h2>Agriculture and Food Security</h2>
			<?php
			foreach($agriculture as $item) {
			?>
			<div class="row ">
				<div class="span12">
					<h2><?= anchor($item->content_type."/".$item->_id, $item->title) ?></h2>
					<?php
					if (!empty($item->blurb)) {
					?>
					<div class="lead">
						<?php if (!empty($item->photo) && (is_array($item->photo))) {
							$photo = $item->photo[0];
						?>
						<div class="img-container pull-left" style="margin-right: 10px;">
						    <img alt="<?= $item->title ?> - Photo" src="<?= @photo($photo, 200, 100) ?>" />
					    </div>
						<?php
						}
						?>
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
			<a href="/stories/agriculture">See all the Agriculture and Food Security stories</a>
			 <!-- <a href="/stories">See all the stories</a> -->
		</div>
	</div>
	
</div>
<!-- <div class="container">
	<?php
	foreach($news as $item) {
	?>
	<div class="row ">
		<div class="span12 underline">
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
</div> -->
<!-- 		<?php
		$x = 1;
		foreach($homepage as $el) {
			$x++;
		?>
		<a name="<?= $el->_id ?>"></a>
		<div class=" background<?= $x ?>">
			<div class="shadow-down"></div>
			<div class="container">
				<div class="row fpitem fpitem-<?= $el->_id ?>">
					<div class="span10 offset1">
						<h1><?= $el->title ?></h1>
						<?= $el->body ?>
					</div>
				</div>
			</div>
			<div class="shadow-up"></div>
		</div>
		
		<?php
		}
		?> -->
<?php
	$this->load->view("templates/footer");
?>