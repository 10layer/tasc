<?php
	$this->load->view("templates/header");
	

	$content = $this->tenlayer->get($content->_id, true);
	// print_r($content);
	if (!empty($content->submission)) {
		$submission = $content->submission[0];
	}
?>
<div class="container page">
	<div class="row">
		<div class="span10 offset1">
			<h1><?= $content->title ?></h1>
			
		</div>
	</div>
	<div class="row">
		<div class="span9 offset1">
			<?php if (!empty($content->submission)) { ?>
			<div class="lead underline">
				By <?= $submission->first_name ?> <?= $submission->surname ?> 
			</div>
			<?php } ?>
			<?php
			if (!empty($content->article)) {
			?>
			<div class="row">
				<div class="span9">
					<h4>Article</h4>
					<div class="body"><?= $content->article ?></div>
				</div>
			</div>
			<?php
			}
			?>

			<?php
			if (!empty($content->body)) {
			?>
			<div class="row">
				<div class="span9">
					<div class="body"><?= $content->body ?></div>
				</div>
			</div>
			<?php
			}
			?>

			<?php
			if (!empty($content->url)) {
			?>
			<div class="row">
				<div class="span9">
					<h4>External Site</h4>
					<iframe src="<?= $content->url ?>" style="height: 400px; width: 100%"></iframe>
					<a href="<?= $content->url ?>" target="_blank"><i class="icon-chevron-right"></i> Open this link in a new page</a>
				</div>
			</div>
			<?php
			}
			?>

			<?php
			if (!empty($content->second_url)) {
			?>
			<div class="row">
				<div class="span9">
					<h4>External Site</h4>
					<iframe src="<?= $content->second_url ?>" style="height: 400px; width: 100%"></iframe>
					<a href="<?= $content->second_url ?>" target="_blank"><i class="icon-chevron-right"></i> Open this link in a new page</a>
				</div>
			</div>
			<?php
			}
			?>

			<?php
			if (!empty($content->photo)) {
			?>
			<div class="row">
				<div class="span9">
					<h4>Photographs</h4>
				</div>
			</div>
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<?php
						$x = 0;
						$class='class="active"';
						foreach($content->photo as $items) {
					?>
					<li data-target="#myCarousel" data-slide-to="<?= $x ?>" <?= $class ?>></li>
					<?php
						}
					?>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
				<?php
					$active = "active";
					foreach($content->photo as $image) {
				?>
					<div class="item <?= $active ?>">
						<div class="img-container">
						    <img alt="<?= $content->title ?> - Photo" src="<?= photo($image, 940, 600) ?>" />
					    </div>
					</div>
				<?php
					$active = "";
					}
				?>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			
			<?php
			}
			?>

			<?php
			if (!empty($content->video)) {
				foreach($content->video as $video) {
			?>
			<div class="row" id="video" >
				<div class="span4">
					<h4>Video</h4>
				</div>
				<video class="span9" controls="controls">
  					<source src="<?= base_url().ltrim($video, "/") ?>" />
  					Your browser does not support this video. <a href="<?= base_url().ltrim($video, "/") ?>">Please download the video here</a>. 
				</video>
			</div>
			<?php
				}
			}
			?>

			<?php
			if (!empty($content->audio)) {
				foreach($content->audio as $audio) {
			?>
			<div class="row" id="audio" >
				<div class="span4">
					<h4>Audio</h4>
				</div>
				<audio class="span9" controls="controls">
  					<source src="<?= base_url().ltrim($audio, "/") ?>" />
  					Your browser does not support this audio. <a href="<?= base_url().ltrim($audio, "/") ?>">Please download the video here</a>. 
				</audio>
			</div>
			<?php
				}
			}
			?>
		</div>
	</div>
	<?php
		$api_key = $this->input->get("api_key");
		$submission = false;
		if (!empty($api_key)) {
			$submission = $this->tenlayer->get($content->submission[0]->_id, false, $api_key);
		}
		if (!empty($submission)) {
		?>
		<h4>Submission</h4>
		<table class="table table-striped table-bordered">
		<?php
			foreach($submission as $key=>$val) {
		?>
		<tr>
			<td><?= $key ?></td>
			<td><?= $val ?></td>
		</tr>
		<?php
			}
		?>
		</table>
		<?php
		}
	?>
</div>

<?php
	$this->load->view("templates/footer");
?>