<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Le Concours Histoires d’Afrique est un nouveau programme doté d’un million de dollars destiné à encourager des reportages multimédia de fond qui interpellent les citoyens et dont l’objectif est l’amélioration de la santé et du bien-être des populations africaines.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Le Concours Histoires d’Afrique</title>
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
			    					<li><a href="<?= base_url() ?>">Maison</a></li>
			    					<li class="">
										<a href="/apply">Postuler</a>
									</li>
									<li class="">
										<a href="/page/dates-cles-20132014">Dates clés</a>
									</li>
									<li class="">
										<a href="/page/themes-du-concours">Thèmes</a>
									</li>
									<li class="">
										<a href="/page/comment-participer">Comment participer</a>
									</li>
									<li class="">
										<a href="/page/foire-aux-questions">FAQ</a>
									</li>
									<li class="">
					    				<a href="/page/a-propos-de-nous">À propos de nous</a>
					    			</li>
							        <li class="">
							        	<a href="/page/lequipe-organisatrice">L'équipe organisatrice</a>
							        </li>
							        <li class="">
										<a href="/page/membres-du-jury">Jury</a>
									</li>
									<li class="">
										<a href="/page/termes-et-conditions">Termes et Conditions</a>
									</li>
									<li class="">
								        <a href="/page/contacts">Contacts</a>
								    </li>
									<li class="">
								        <a href="/page/lequipe-du-concours-histoires-dafrique-qui-sommes-nous">L’équipe de Concours Histoires d’Afrique</a>
								    </li>
			    				</ul>
			    			</li>
			    		</ul>
			    	
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<a class="brand" href="<?= base_url() ?>"><img alt="Le Concours Histoires d’Afrique" src="/resources/images/logo.png" /></a>
			</div>

			<div class="span9  hidden-phone">
				<div class="row search-bar">
					<div class="span2">
						<a target="_blank" href="https://twitter.com/storychallenge" class="btn"><i class="icon-twitter"></i></a>
						<a target="_blank" href="http://www.facebook.com/AfricanStoryChallenge" class="btn"><i class="icon-facebook"></i></a>
						<a target="_blank" href="https://plus.google.com/communities/105613979636196049691" class="btn"><i class="icon-google-plus"></i></a>
					</div>
					<div class="span7"><div class="gcse-search"></div></div>
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
					        <a href="<?= base_url() ?>">Maison</a>
					    </li>
					    <li class="<?= ($uri == "apply") ? 'active' : '' ?>">
							<a href="/apply">Postuler</a>
						</li>
						<li class="hidden-phone <?= ($uri == "dates-cles-20132014") ? 'active' : '' ?>">
							<a href="/page/dates-cles-20132014">Dates clés</a>
						</li>
						<li class="visible-desktop <?= ($uri == "themes-du-concours") ? 'active' : '' ?>">
							<a href="/page/themes-du-concours">Thèmes</a>
						</li>
					    
						<!-- <li class="visible-desktop <?= ($uri == "comment-participer") ? 'active' : '' ?>">
							<a href="/page/how-to-enter">Comment participer</a>
						</li> -->
						<li class="visible-desktop <?= ($uri == "foire-aux-questions") ? 'active' : '' ?>">
							<a href="/page/foire-aux-questions">FAQ</a>
						</li>
						
						
						
					    <li class="dropdown">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="visible-phone">&#9776;</span> <span class="hidden-phone">Plus d'infos <b class="caret"></b></span></a>
					    	<ul class="dropdown-menu">
								<li class="visible-phone <?= ($uri == "dates-cles-20132014") ? 'active' : '' ?>">
									<a href="/page/dates-cles-20132014">Dates clés</a>
								</li>
					    		<li class="hidden-desktop <?= ($uri == "themes-du-concours") ? 'active' : '' ?>">
									<a href="/page/themes-du-concours">Thèmes</a>
								</li>
					    		<li class=" <?= ($uri == "comment-participer") ? 'active' : '' ?>">
									<a href="/page/comment-participer">Comment participer</a>
								</li>
					    		<li class="hidden-desktop <?= ($uri == "foire-aux-questions") ? 'active' : '' ?>">
									<a href="/page/foire-aux-questions">FAQ</a>
								</li>
					    		<li class="">
					    			<a href="/page/a-propos-de-nous">À propos de nous</a>
					    		</li>
					    		<!-- <li class="">
						        	<a href="<?= base_url() ?>#2013-04-30-aim-of-the-african-story-challenge">Aim</a>
						        </li> -->
						        <!-- <li class="">
						        	<a href="/page/winners">Winners</a>
						        </li> -->
						        <li class="">
						        	<a href="/page/lequipe-organisatrice">L'équipe organisatrice</a>
						        </li>
						        <li class="">
									<a href="/page/membres-du-jury">Jury</a>
								</li>
								
								<li class="<?= ($uri == "termes-et-conditions") ? 'active' : '' ?>">
									<a href="/page/termes-et-conditions">Termes et Conditions</a>
								</li>
								<li class="">
							        <a href="/page/contacts">Contacts</a>
							    </li>
								<li class="">
							        <a href="/page/lequipe-du-concours-histoires-dafrique-qui-sommes-nous">L’équipe de Concours Histoires d’Afrique</a>
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
		