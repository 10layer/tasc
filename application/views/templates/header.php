<!DOCTYPE html>
<html lang="en-gb">
<head>
	<meta charset="utf-8">
	<meta name="description" content="The African Story Challenge (TASC) is a new $1 million programme of reporting grants to encourage innovative, multi-media storytelling that aims to improve the health and prosperity of Africans.">
	<meta name="keywords" content="Journalism, Africa, Reporting, Storytelling, Health, Agriculture, Rural Development, Water, Sanitation, Business, Technology, Environment">
	<title>The African Story Challenge</title>
	<link rel="stylesheet" type="text/css" href="/resources/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/resources/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/resources/css/style.css" />
	<script src="/resources/jquery/jquery-1.9.1.min.js"></script>
	<script src="/resources/bootstrap/js/bootstrap.min.js"></script>
	<script src="/resources/modernizr/modernizr.js"></script>
	<script src="/resources/waypoints/waypoints.min.js"></script>
	<script src="/resources/waypoints/shortcuts/sticky-elements/waypoints-sticky.min.js"></script>
	<script src="/resources/tasc.js"></script>
	<script>
		var apiurl = "<?= $this->tenlayer->apiurl ?>";
		
		$(function() {
			$(".pop").popover({
				html: true,
				trigger: "hover",
				content: function() {
					var el = $($(this).attr("data-popup-src"));
					return el.html();
				}
			});
			
			$.getJSON(apiurl + "/publish/section/agriculture", function(data) {
				console.log(data.content);
			});
		});
	</script>
</head>
<body data-spy="scroll" data-target=".navbar">
	<div class="container header">
		<div class="row">
			<div class="span3">
				<a class="brand" href="<?= base_url() ?>"><img alt="The African Story Challenge" src="/resources/images/logo.png" alt="" /></a>
			</div>
			<div class="span9">
				<div class="row search-bar">
					<div class="span2">
						<a href="#" class="btn"><i class="icon-twitter"></i></a>
						<a href="#" class="btn"><i class="icon-facebook"></i></a>
						<a href="#" class="btn"><i class="icon-google-plus"></i></a>
					</div>
					<div class="span7"><gcse:search></gcse:search></div>
				</div>
				<div class="row">
				<div class="navbar navbar-inverse">
					<div class="navbar-inner">
					<ul class="nav">
					    <li class="active">
					        <a href="<?= base_url() ?>">Home</a>
					    </li>
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
						        	<a href="<?= base_url() ?>#aim-of-the-african-story-challenge">Aim</a>
						        </li>
						        <li class="">
						        	<a href="<?= base_url() ?>/page/winners">Winners</a>
						        </li>
						        <li class="">
						        	<a href="/page/partners">AMI &amp; Partners</a>
						        </li>
						    </ul>
					    </li>
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entry Info <b class="caret"></b></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
						        	<a href="<?= base_url() ?>#fpitem-entry-criteria">How to Enter</a>
						        </li>
						        <li class="">
						        	<a href="<?= base_url() ?>#themes">Themes</a>
						        </li>
						        <li class="">
						        	<a href="/page/judges">Judges</a>
						        </li>
						        <li class="">
						        	<a href="/page/faq">FAQ</a>
						        </li>
						        <li class="">
						        	<a href="/page/terms-and-conditions">Terms &amp; Conditions</a>
						        </li>
						    </ul>
					    </li>
					    <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Apply
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="">
							        <a href="<?= base_url() ?>/apply">Application Form</a>
							    </li>
							    <li class="">
							        <a href="<?= base_url() ?>#dates">Key Dates</a>
					    		</li>
							</ul>
						</li>
					    <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Stories
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="">
							        <a href="<?= base_url() ?>/blog">Blog</a>
							    </li>
							    <li class="">
							        <a href="<?= base_url() ?>/examples">Examples</a>
					    		</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Contact
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="">
							        <a href="<?= base_url() ?>page/team">Team</a>
							    </li>
							</ul>
						</li>
					 </ul>
					 </div>
			    </div>
			    </div>
			</div>
		</div>
	</div>
		