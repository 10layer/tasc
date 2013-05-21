<?php
	$this->load->view("templates/header");
?>
<div class="container body">
<div class="lead">
	<p>The African Story Challenge is a new $1 million programme of reporting grants to encourage innovative, multi-media storytelling that aims to improve the health and prosperity of Africans.</p>
	<div class="row">
		<div class="span12">
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
				<?php
					$active = "active";
					foreach($carousel as $el) {
						if (is_array($el->image)) {
					  		$el->image = array_pop($el->image);
					  	}
				?>
					<div class="item <?= $active ?>">
						<div class="img-container">
						    <img alt="<?= $el->title ?>" src="<?= photo($el->image, 940, 600) ?>" />
					    </div>
					    <div class="img-blurb">
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
	<div class="row">
		<div class="span3 offset4">
			<a class="btn btn-primary">Entry Form</a>
		</div>
	</div>
</div>
</div>
		<?php
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
		?>
<?php
	$this->load->view("templates/footer");
?>