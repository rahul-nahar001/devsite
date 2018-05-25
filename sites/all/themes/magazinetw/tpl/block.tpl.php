<?php 
$out = '';

if ($block->region == 'sidebar_first' or $block->region == 'sidebar_second') { 
	$out .= '<li id="'.$block_html_id.'" class="widget widget_sidebar '.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject && !empty($block->subject))
			$out .= '<h2 class="widgettitle">'.$block->subject.'</h2>';
		$out .= $content;
	
	$out .= '</li>';
	
	
}elseif($block->region == 'content' || $block->region == 'content_fullwide'){
	$out .= '<li id="'.$block_html_id.'" class="widget widget_content '.$classes.'" '.$attributes.'>';
		if ($block->subject){
			$out .= '<h2 class="widgettitle" '.$title_attributes.'>'.$block->subject.'</h2>';
		}
		$out .= render($title_suffix);
		$out .= $content;
	$out .= '</li>';
	
	
}elseif($block->region == 'main_menu' || $block->region == 'left_bar' || $block->region == 'right_bar' || $block->region == 'slideshow' || $block->region == 'banner'){
	if ($block->subject)
		$out .= '<h4 '.$title_attributes.'>'.$block->subject.'</h4>';
	$out .= $content;
}elseif($block->region == 'footer_col_one' || $block->region == 'footer_col_two' || $block->region == 'footer_col_three'){ //Footer
		$out .= '<li class="widget '.$classes.'" id="'.$block_html_id.'"  '.$attributes.'>';
			$out .= render($title_suffix);
			if ($block->subject)
				$out .= '<h2 class="widgettitle" '.$title_attributes.'>'.$block->subject.'</h2>';
			$out .= $content;
		$out .= '</li>';
}else{
	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_prefix);
		if ($block->subject):
			$out .= '<div class="content-header widget-header v3"><h4 '.$title_attributes.'>'.$block->subject.'</h4></div>';
		endif;
		$out .= $content;
	$out .= '</div>';
}
print $out;
?>