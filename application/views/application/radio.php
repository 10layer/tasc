<label><?= $label ?></label>
<?php
foreach($options as $item) {
?>
<label class="radio">
	<input type="radio" name="<?= $name ?>" value="<?= $item ?>" <?= ($item == $value) ? 'checked="checked"' : '' ?> /> <?= $item ?>
</label>
<?php
}
?>