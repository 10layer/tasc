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
			
			/*$.getJSON(apiurl + "/publish/section/agriculture", function(data) {
				console.log(data.content);
			});*/
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
						<a target="_blank" href="https://twitter.com/storychallenge" class="btn"><i class="icon-twitter"></i></a>
						<a target="_blank" href="http://www.facebook.com/AfricanStoryChallenge" class="btn"><i class="icon-facebook"></i></a>
						<a target="_blank" href="https://plus.google.com/communities/105613979636196049691" class="btn"><i class="icon-google-plus"></i></a>
					</div>
					<div class="span7"><gcse:search></gcse:search></div>
				</div>
				
				<div class="row">
					<?php
						$uri = $this->uri->segment($this->uri->total_segments() );
						if (empty($uri)) {
							$uri = "home";
						}
					?>
				<div class="navbar">
					<div class="navbar-inner">
					<ul class="nav">
					    <li class="<?= ($uri == "home") ? 'active' : '' ?>">
					        <a href="<?= base_url() ?>">Home</a>
					    </li>
					    <li class="<?= ($uri == "apply") ? 'active' : '' ?>">
							<a href="/apply">Apply</a>
						</li>
						<li class="<?= ($uri == "key-dates") ? 'active' : '' ?>">
							<a href="/page/key-dates">Key Dates</a>
						</li>
						<li class="<?= ($uri == "themes") ? 'active' : '' ?>">
							<a href="/page/themes">Themes</a>
						</li>
					    <!-- <li class="">
					    	<?= anchor("/page/about", "About") ?>
					    </li> -->
					    <!-- <li class="">
							<a href="/page/the-challenge-organisers">Organisers</a>
						</li> -->
						<li class="<?= ($uri == "how-to-enter") ? 'active' : '' ?>">
							<a href="/page/how-to-enter">How to Enter</a>
						</li>
						
						<!-- <li class="">
							<a href="/page/judges">Judges</a>
						</li> -->
						<!-- <li class="">
							<a href="/page/frequently-asked-questions">FAQ</a>
						</li> -->
						<li class="<?= ($uri == "terms-and-conditions") ? 'active' : '' ?>">
							<a href="/page/terms-and-conditions">T&amp;Cs</a>
						</li>
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Info <b class="caret"></b></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
					    			<a href="/page/about">About The African Story Challenge</a>
					    		</li>
					    		<!-- <li class="">
						        	<a href="<?= base_url() ?>#2013-04-30-aim-of-the-african-story-challenge">Aim</a>
						        </li> -->
						        <!-- <li class="">
						        	<a href="/page/winners">Winners</a>
						        </li> -->
						        <li class="">
						        	<a href="/page/the-challenge-organisers">The Challenge Organisers</a>
						        </li>
						        <li class="">
									<a href="/page/judges">The Challenge Judges</a>
								</li>
								<li class="">
									<a href="/page/frequently-asked-questions">Frequently-Asked Questions</a>
								</li>
								<li class="">
							        <a href="/page/contact">Contact Details</a>
							    </li>
								<li class="">
							        <a href="/page/the-team">The Team</a>
							    </li>
						    </ul>
					    </li>
					    <!-- <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entry Info <b class="caret"></b></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
						        	<a href="/page/how-to-enter">How to Enter</a>
						        </li>
						        <li class="">
						        	<a href="/page/themes">Themes</a>
						        </li>
						        <li class="">
						        	<a href="/page/judges">Judges</a>
						        </li>
						        <li class="">
						        	<a href="/page/frequently-asked-questions">FAQ</a>
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
							        <a href="/apply">Application Form</a>
							    </li>
							    <li class="">
							        <a href="/page/key-dates">Key Dates</a>
					    		</li>
							</ul>
						</li> -->
					    <!-- <li class="dropdown">
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
						</li> -->
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Contact
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="">
							        <a href="/page/contact">Contact Details</a>
							    </li>
								<li class="">
							        <a href="/page/the-team">The Team</a>
							    </li>
							</ul>
						</li> -->
					 </ul>
					 </div>
			    </div>
			    </div>
			</div>
		</div>
	</div>
		