<?php
	$this->load->view("templates/header");
?>

<div class="container">
	<h1>Apply</h1>
	<form method="post">
		<input name="action" value="insert" type="hidden" />
		<fieldset>
			<legend>Legend</legend>
			<label>First Name</label>
			<input name="first_name" type="text" placeholder="">
			<label>Last Name</label>
			<input name="last_name" type="text" placeholder="">
			<label>Email address</label>
			<input name="email" type="email" placeholder="">
			<label>Telephone number (including international country codes)</label>
			<input name="tel" type="tel" placeholder="">
			<label>Nationality</label>
			<input name="nationality" type="text" placeholder="">
			<label>Country of Residence</label>
			<input name="country" type="text" placeholder="">
			<label>Please specify if you are a freelance or permanent staff</label>
			<label class="radio">
				<input type="radio" name="permanent" value="permanent"> Permanent
			</label>
			<label class="radio">
				<input type="radio" name="permanent" value="freelance"> Freelance
			</label>
			<label>Name of current media organization (freelancers must indicate an eligible media outlet they will pitch to)</label>
			<input name="organization" type="text" placeholder="">
			<label>Current job title at your media organization</label>
			<input name="job_title" type="text" placeholder="">
			<label>Country where your media is located</label>
			<input name="media_country" type="text" placeholder="">
			<label>Upload CV</label>
			<input name="cv" type="file" placeholder="">
			<label>Entry Theme</label>
			<select name="theme">
				<option>Agriculture and rural development</option>
				<option>Health, water and sanitation (this theme will open for competition on: X date)</option>
				<option>My Africa in 2063 (this theme will open for competition on: X date)</option>
				<option>Who am I? Identity, Arts and Culture (this theme will open for competition on: X date)</option>
				<option>Business and Technology (this theme will open for competition on: X date)</option>
				<option>Urbanisation (this theme will open for competition on: X date)</option>
			</select>
			<label>Pitch</label>
			<textarea class="span12" name="pitch"></textarea>
			Top Tips for Pitching your Story
			<label>Full Proposal</label>
			<textarea class="span12" name="proposal"></textarea>
			<label>Question</label>
			<select name="question">
				<option>Awaiting content</option>
			</select>
			<label>Primary Platform</label>
			<select name="platform">
				<option>Print</option>
				<option>Radio package</option>
				<option>TV package</option>
				<option>Blog</option>
				<option>Online/digital story</option>
			</select>
			<label>Story title</label>
			<input name="title" type="text" placeholder="">
			<label>Your storyline</label>
			<textarea class="span12" name="storyline"></textarea>
			<label>Story locations</label>
			<textarea class="span12" name="locations"></textarea>
			<label>People you will interview</label>
			<textarea class="span12" name="interviewees"></textarea>
			<label>Target Audience</label>
			<textarea class="span12" name="audience"></textarea>
			<label>Apart from the importance of the topic, what makes your story 'innovative'?</label>
			<textarea class="span12" name="innovative"></textarea>
			<label>Potential Impact of the story</label>
			<textarea class="span12" name="impact"></textarea>
			<label>Confirmed Outlet</label>
			<input name="outlet" type="text" placeholder="">
			<label>What is your cross platform strategy, if any</label>
			<textarea class="span12" name="cross_platform_strategy"></textarea>
			<label>Please give an estimation of required story budget</label>
			<input name="budget" type="text" placeholder="">
			<label>Samples of past work</label>
			<input name="samples" type="file" placeholder="">
			
			
			
			<!-- <span class="help-block">Example block-level help text here.</span> -->
			<!-- <label class="checkbox">
				<input type="checkbox"> Check me out
			</label> -->
			<label><button type="submit" class="btn">Submit</button></label>
		</fieldset>
	</form>
</div>

<?php
	$this->load->view("templates/footer");
?>