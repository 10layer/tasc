<label><?= $label ?></label>
<select name="<?= $name ?>" class="span4">
<?php
foreach($options as $item) {
?>
	<option <?= ($item == $value) ? 'selected="selected"' : '' ?>><?= $item ?></option>
<?php
}
?>
</select>