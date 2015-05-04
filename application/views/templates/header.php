<!DOCTYPE html>
<html lang="en-gb">
<head>
	<meta charset="utf-8">
	<meta name="description" content="The African Story Challenge (TASC) is a project of reporting grants set up to spur innovative multimedia storytelling by African journalists, with the aim of encouraging better policies and greater public engagement on issues that matter to Africans.">
	<meta name="keywords" content="Journalism, Africa, Reporting, Storytelling, Health, Agriculture, Rural Development, Water, Sanitation, Business, Technology, Environment">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The African Story Challenge</title>
	<link rel="stylesheet" type="text/css" href="/resources/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/resources/bootstrap/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="/resources/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/resources/css/style.css" />
	
	<script>
		var apiurl = "<?= $this->tenlayer->apiurl ?>";
	</script>
	<script>
	//Google Analytics
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41102116-1', 'africanstorychallenge.com');
		ga('send', 'pageview');
	</script>
</head>
<body data-spy="scroll" data-target=".navbar">
	<div class="container header">
		<div class="row">
			<div class="visible-phone">
				
						<ul class="nav nav-pills ">
							<li class="dropdown pull-right">
			    				<a href="#" class="btn dropdown-toggle" data-toggle="dropdown">&#9776;</span></a>
			    				<ul class="dropdown-menu">
			    					<li><a href="<?= base_url() ?>">Home</a></li>
									<li class="">
										<a href="/news">News</a>
									</li>
									<li class="">
										<a href="/stories">Stories</a>
									</li>
									<li class="">
										<a href="/page/frequently-asked-questions">FAQ</a>
									</li>
									<li class="">
					    				<a href="/page/about">About The African Story Challenge</a>
					    			</li>
							        <li class="">
							        	<a href="/page/the-challenge-organisers">The Challenge Organisers</a>
							        </li>
							        <li class="">
										<a href="/page/judges">The Challenge Judges</a>
									</li>
									<li class="">
								        <a href="/page/contact">Contact Details</a>
								    </li>
									<li class="">
								        <a href="/page/the-team">The Team</a>
								    </li>
								    <li>
								    	<a href="http://fr.africanstorychallenge.com">Français</a>
								    </li>
			    				</ul>
			    			</li>
			    		</ul>
			    	
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<a class="brand" href="<?= base_url() ?>"><img alt="The African Story Challenge" src="/resources/images/logo.png" /></a>
			</div>

			<div class="span9  hidden-phone">
				<div class="row search-bar">
					<div class="span2">
						<a target="_blank" href="https://twitter.com/storychallenge" class="btn"><i class="icon-twitter"></i></a>
						<a target="_blank" href="http://www.facebook.com/AfricanStoryChallenge" class="btn"><i class="icon-facebook"></i></a>
						<a target="_blank" href="https://plus.google.com/communities/105613979636196049691" class="btn"><i class="icon-google-plus"></i></a>
					</div>
					<div class="span6"><div class="gcse-search"></div></div>
					<div class="span1 smaller"><a href="http://fr.africanstorychallenge.com">Français</a></div>
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
						<li class="<?= ($uri == "news") ? 'active' : '' ?>">
							<a href="/news">News</a>
						</li>
						<li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="visible-phone">&#9776;</span> <span class="hidden-phone">Stories <b class="caret"></b></span></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
					    			<a href="/stories">All Stories</a>
					    		</li>
					    		<li class="">
					    			<a href="/stories/agriculture">Agriculture and Food Security</a>
					    		</li>
					    		<li class="">
									<a href="/stories/business">Business and Technology</a>
								</li>
						        <li class="">
						        	<a href="/stories/diseases">Diseases: Prevention and Treatment</a>
						        </li>
						        
							</ul>
						</li>
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="visible-phone">&#9776;</span> <span class="hidden-phone">About <b class="caret"></b></span></a>
					    	<ul class="dropdown-menu">
					    		<li class="">
					    			<a href="/page/about">About The African Story Challenge</a>
					    		</li>
						        <li class="">
						        	<a href="/page/the-challenge-organisers">The Challenge Organisers</a>
						        </li>
						        <li class="">
									<a href="/page/judges">The Challenge Judges</a>
								</li>
								
								
								<li class="">
							        <a href="/page/contact">Contact Details</a>
							    </li>
								<li class="">
							        <a href="/page/the-team">The Team</a>
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
		