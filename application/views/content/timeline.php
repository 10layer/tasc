<?php
	$this->load->view("templates/header");
?>
<div class="container body">
		<div class="row">
			<div class="span12" style="margin-top: 20px; height: 600px">	
				<div id="timeline-embed"></div>
				<script>
					var timeline_config = {
					     width: "100%",
					     height: "400",
					     source: '/timeline/feed/<?= $urlid ?>',
					     css: '/resources/timeline_js/compiled/css/timeline.css',
					     js: '/resources/timeline_js/compiled/js/timeline-min.js',
				    }
				</script>
				<script type="text/javascript" src="/resources/timeline_js/compiled/js/storyjs-embed.js"></script>
					
				</div>
			</div>
		</div>
</div>
			
<?php
	$this->load->view("templates/footer");
?>