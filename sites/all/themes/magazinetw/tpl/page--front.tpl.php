<?php include_once('header.tpl.php');?>
<div class="tm_content">
	<div class="tm_home_index_2">
		<!--<home left>-->
		<div class="tm_center">
			<!--<center blog widget>-->
			<div class="tm_center_widget">
				<ul>
					<?php
						if ($page['slideshow']):
					?>
					<li id="tmmyid_slider_box-2" class="widget widget_tm_slider" style="overflow:hidden; max-height:300px;">
						<?php 
								print render($page['slideshow']);
							?>
					</li>
					<?php
						endif;
					?>
					<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						if(drupal_is_front_page()) {
							unset($page['content']['system_main']['default_message']);
						}
						print $messages;
						print render($page['content']); 
					?>
					<?php if($page['content_bottom']):?>
						<li class="tm_center_two_col">
							<?php print render($page['content_bottom']);?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
			<!--</center blog widget>-->
		</div>
		<?php
			if ($page['sidebar_first']):
				print '<div class="tm_left">';
					print '<div class="tm_sidebarwidget_left">';
						print '<ul>';
							print render($page['sidebar_first']);
						print '</ul>';
					print '</div>';
				print '</div>';
			endif;
		?>
		<?php
			if ($page['sidebar_second']):
				print '<div class="tm_right">';
					print '<div class="tm_sidebar_right">';
						print '<ul>';
							print render($page['sidebar_second']);
						print '</ul>';
					print '</div>';
				print '</div>';
			endif
		?>
		<!--</home right>-->
		<div class="clear"></div>
	</div>
	<!--</home 2>-->
	<?php
		if ($page['content_fullwide']):
	?>
	<div class="tm_footer_index">
		<div class="tm_footer_index_widget">
			<ul>
				<?php
						print render($page['content_fullwide']);
					?>
			</ul>
		</div>
	</div>
	<?php
		endif;
	?>
</div>
<?php
	include_once('footer.tpl.php');
?>