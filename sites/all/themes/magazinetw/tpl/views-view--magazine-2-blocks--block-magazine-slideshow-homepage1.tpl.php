<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="bx-wrapper">
	<div class="bx-viewport">
		<?php if ($rows): ?>
			<?php print $rows; ?>
		<?php endif; ?>
	</div>
	<div class="bx-controls bx-has-controls-direction">
		<div class="bx-controls-direction"><a class="bx-prev" href="#"><?php print t('Prev');?></a><a class="bx-next" href="#"><?php print t('Next');?></a></div>
	</div>
</div>