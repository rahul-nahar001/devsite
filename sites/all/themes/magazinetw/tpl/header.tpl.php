<!--<tm top menu>-->

<div class="tm_top_menu">
	<?php 
		if ($page['left_bar']): 
			print render($page['left_bar']);
		endif;
	?>
	<?php 
		if ($page['right_bar']): 
			print render($page['right_bar']);
		endif;
	?>
</div>
<!--</tm top menu>-->
<!--<header>-->
<div class="tm_header">
	<!--<tm headerin>-->
	<div class="tm_header_file">
		<div class="tm_header_logo_ads">
			<?php
				if($logo){
			?>
			<div class="tm_logo">
				<div class="tm_logo_img"><a rel="home" href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" class="tm_logoup" alt="<?php print $site_name; ?>" /></a></div>
			</div>
			<?php }?>
			<?php if ($site_slogan){ ?>
			<div id="site-slogan"><?php print $site_slogan; ?></div>
			<?php } ?>
			<?php 
				if ($page['banner']): 
					print '<div class="tm_topads_728">';
						print '<ul>';
							print '<li id="tmmyid_ad728x90_widget-2" class="widget tm_ad728x90_widget">';
								print render($page['banner']);
							print '</li>';
						print '</ul>';
					print '</div>';
				endif;
			?>
		</div>
	</div>
	<!--</tm headerin>-->
</div>
<!--<header>-->
<!--<nav>-->
<!--<nav desktop>-->
<div class="tm_menu_desktop">
	<!--MainMenu-->
	<div id="nav">
		<div class="navigasi_menu">
			<div class="navigasi_list">
				<div class="menu-main-menu-container">
					<?php
						if ($page['main_menu']): 
							print render($page['main_menu']);
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<div style="width: 1215px; height: 75px; float: none; display: none;"></div>
	<!--//MainMenu-->
</div>
<!--</nav desktop>-->
<!--<nav mobile>-->
<div class="tm_menu_mobile">
	<!--<menu mobile>-->
	<nav>
		<div id="navigasi_menu_reseponsive">
			<div class="menu-main-menu-container">
				<?php
						if ($page['main_menu']): 
							print render($page['main_menu']);
						endif;
					?>
			</div>
		</div>
	</nav>
	<!--</menu mobile>-->
</div>
