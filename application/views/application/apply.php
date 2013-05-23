<?php
	$this->load->view("templates/header");
?>

<div class="container">
	<h1>Apply</h1>
	<?php
	if (!empty($errormsg)) {
	?>
	<div class="alert alert-error alert-block">
		<p><strong><?= implode(" ", $errormsg) ?></strong></p>
		<p><?= implode("<br />", $errorinfo); ?></p>
	</div>
	<?php
	}
	?>
	<form method="post" enctype="multipart/form-data">
		<input name="action" value="insert" type="hidden" />
		<fieldset>
			<!-- <legend>Legend</legend> -->
			<?php
				foreach($form as $input) {
					if (empty($input->hidden) && isset($input->name)) {
						//print $input->name;
						$input->required = false;
						$reqcheck = new stdClass();
						$reqcheck->fn = "required";
						$reqcheck->hint = "Required";
						if (in_array($reqcheck, $input->rules)) {
							$input->required = true;
						}
						//print_r($input);
						$this->load->view("application/{$input->type}", $input);
					}
				}
			?>
			<label><button type="submit" class="btn btn-primary btn-submit">Submit</button></label>
		</fieldset>
	</form>
</div>

<?php
	$this->load->view("templates/footer");
?>