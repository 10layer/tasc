<?php
	$this->load->view("templates/header");
?>
<div class="container page">
	<div class="row">
		<div class="span10 offset1">
			<h1>Photo Gallery</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<?php
						$x = 0;
						$class='class="active"';
						foreach($content as $items) {
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
					foreach($content as $el) {
						if (is_array($el->image)) {
					  		$el->image = array_pop($el->image);
					  	}
				?>
					<div class="item <?= $active ?>">
						<div class="img-container">
						    <img alt="<?= $el->title ?>" src="<?= photo($el->image, 940, 600) ?>" />
					    </div>
					    <div class="img-blurb" style="width: 100%">
					    	<h3><?= $el->title ?></h3>
					    	<p><?= $el->blurb ?></p>
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
		</div>
	</div>
	</div>
</div>

<?php
	$this->load->view("templates/footer");
?>