<div class="slider-wrapper theme-default" style="max-width:100%;width:<?php echo $images[0]->width; ?>px;height:<?php echo $images[0]->height; ?>px;">
	<div id="slider_<?php echo $slider->id; ?>" class="nivoSlider">
		<?php foreach($images as $image): ?>
		<img src="<?php echo $image->path; ?>" alt="" <?php echo ($options['captions'] === 'true') ? 'title="'.$image->name.'"' : null; ?> />
		<?php endforeach; ?>
	</div>
</div>
<script type="text/javascript">
$('#slider_<?php echo $slider->id; ?>').nivoSlider({
	<?php echo ($options['effect']) ? 'effect: "'.$options['effect'].'",' : null; ?>
	<?php echo ($options['animSpeed']) ? 'animSpeed: "'.$options['animSpeed'].'",' : null; ?>
	<?php echo ($options['pauseTime']) ? 'pauseTime: "'.$options['pauseTime'].'",' : null; ?>
	<?php echo ($options['directionNav']) ? 'directionNav: '.$options['directionNav'].',' : null; ?>
	<?php echo ($options['directionNavHide']) ? 'directionNavHide: '.$options['directionNavHide'].',' : null; ?>
	<?php echo ($options['controlNav']) ? 'controlNav: '.$options['controlNav'].',' : null; ?>
	<?php echo ($options['keyboardNav']) ? 'keyboardNav: '.$options['keyboardNav'].',' : null; ?>
	<?php echo ($options['pauseOnHover']) ? 'pauseOnHover: '.$options['pauseOnHover'].',' : null; ?>
	<?php echo ($options['manualAdvance']) ? 'manualAdvance: '.$options['manualAdvance'].',' : null; ?>
	<?php echo ($options['slices']) ? 'slices: '.$options['slices'].',' : null; ?>
	<?php echo ($options['boxCols']) ? 'boxCols: '.$options['boxCols'].',' : null; ?>
	<?php echo ($options['boxRows']) ? 'boxRows: '.$options['boxRows'].',' : null; ?>
});
</script>