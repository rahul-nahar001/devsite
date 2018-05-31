<div class="clear"></div>
<!--<footer>-->
<div class="tm_footer">
	<!--<bottom 3 brick>-->
	<div class="footer_brick">
		<div class="footer_brick_box">
			<?php
				if($page["footer_col_one"]):
					print '<div class="footer_brick_1 footer_brick_inner"><div class="footerwidget"><ul>';
						print render($page["footer_col_one"]);
					print '</ul></div></div>';
				endif;
				
				if($page["footer_col_two"]):
					print '<div class="footer_brick_2 footer_brick_inner"><div class="footerwidget"><ul>';
						print render($page["footer_col_two"]);

				if ($page['left_bar']): 
					print render($page['left_bar']);
				endif;
	
					print '</ul></div></div>';
				endif;
				
				if($page["footer_col_three"]):
					print '<div class="footer_brick_3 footer_brick_inner"><div class="footerwidget"><ul>';
						print render($page["footer_col_three"]);
					print '</ul></div></div>';
				endif;
			?>
			
		</div>
	</div>
	<!--</bottom 3 brick>-->
	<div class="footerin override-background-color">
		<?php
			if ($page['footer_menu']): 
				print render($page['footer_menu']);
			endif;
		?>
		
		<div class="footerin_2"> <?php print theme_get_setting('footer_copyright_message', 'magazinetw'); ?></div>
	</div>
</div>
<!--</footer>-->
<div id="backtotop" class="override-background-color">
	<div class="img_backtotop"></div>
</div>
<?php
	include_once('switcher.tpl.php');
?>