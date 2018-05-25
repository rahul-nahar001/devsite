<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root;
if($node->type=='blog'){
	$style = 'large'; //image style
	if($node->field_image){
	$imageone = $node->field_image['und'][0]['uri']; 
	}else{
	$imageone = '';
	}
	
	
	
	if(!empty($node->field_post_type['und'][0]['value']))
			$post_type_a = $node->field_post_type['und'][0]['value'];
	?>

<div class="tm_category_file " id="node-<?php print $node->nid; ?>">
	<div class="tm_category_box">
		<div class="post type-post status-publish format-standard has-post-thumbnail hentry <?php print $classes; ?>" <?php print $attributes; ?>>
			<?php
				if(!$page){
			?>
			<div class="tm_catpost_titles"><a href="<?php print $node_url; ?>" rel="bookmark" title="<?php print $title;?>">
				<h1><?php print $title;?></h1>
				</a></div>
			<?php
				}
			?>
			<div class="tm_cat_item" <?php if($page) print ' style="margin-top:20px;"'?>>
				<div class="">
					<div class="tm_catpost_item_1"><i class="fa fa-user"></i><?php print t('By');?><?php print $node->name?></div>
					<div class="tm_catpost_item_2"><i class="fa fa-tag"></i><?php print t('In').' '; print render($content['field_categories'])?></div>
					<div class="tm_catpost_item_3"><i class="fa fa-calendar"></i><?php print format_date($node->created, 'custom', 'M d, Y');?></div>
					<div class="tm_catpost_item_4"><i class="fa fa-comments"></i><?php print $comment_count.t(' Comments')?></div>
				</div>
			</div>
			<!--</cat item>-->
			<?php
				if($page){
					if($node->field_image){
//						hide($content['comments']); 
				?>
			<div class="tm_cat_image"><?php print theme('image', array('path' => $imageone, 'attributes'=>array('class'=>'"attachment-full', 'alt'=>$title)));?></div>
			<?php
					}
				}else{
						if($node->field_youtube){
							//print $node->field_youtube['und'][0]['value'];
							print render($content['field_youtube']);
						}elseif($node->field_image){
	//						hide($content['comments']); 
					?>
			<div class="tm_cat_image"><?php print theme('image', array('path' => $imageone, 'attributes'=>array('class'=>'"attachment-full', 'alt'=>$title)));?></div>
			<?php
						}	
				}
					//print 'Categories: '.render($content['field_categories']);
				?>
			<!--<cat image>-->
			<!--</cat image>-->
			<div class="tm_cat_desc">
				<div class="tmpost-desc">
					<?php
							hide($content['comments']); 
							hide($content['links']); 
							hide($content['field_tags']); 
							hide($content['field_image']); 
							hide($content['field_categories']); 
							
							print render($content);
						?>
				</div>
				<?php
						if(!$page):
					 ?>
				<div class="tm_cat_readmore">
					<div class="tmpost-readmore"><a href="<?php print $node_url; ?>" title="<?php print $title?>"><i class="icon-file-text"></i><?php print t('Read More')?></a>
						<div class="tmpost-readmore_list"></div>
					</div>
				</div>
				<?php
					endif;
		if($page):
		?>
				<div class="post_tags"><span><?php print t('Tagged: ');?></span>
					<?php 
					print render($content['field_tags']);
				?>
				</div>
				<div class="share_post">
					<div class="share_post_pad">
						<!--facebook share-->
						<div class="share_post_facebook">
							<div class="fb-like" data-href="<?php print $node_url; ?>" data-send="false" data-layout="button_count" data-show-faces="false"></div>
						</div>
						<!--// facebook share-->
						<!--G+-->
						<div class="share_post_gplus">
							<div class="g-plus" data-action="share" data-annotation="bubble"></div>
						</div>
						<!--/G+-->
						<!--linkedIn-->
						<div class="share_post_linkedin">
							<script type="IN/Share" data-url="<?php print $node_url; ?>"></script>
						</div>
						<!--linkedIN-->
						<!--twitter share-->
						<div class="share_post_twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $node_url; ?>"><?php print t('Tweet');?></a></div>
						<!--/twitter share-->
					</div>
				</div>
				<?php print render($content['comments']); ?></div>
			<?php
				
				
			endif;
		?>
		</div>
	</div>
</div>

<?php

		
}else{
	if(!empty($node)){
?>
<div class="tm_category_file " id="node-<?php print $node->nid; ?>">
	<div class="tm_category_box">
		<div class="post type-post status-publish format-standard has-post-thumbnail hentry <?php print $classes; ?>" <?php print $attributes; ?>>
			<?php
				if(!$page){
			?>
			<div class="tm_catpost_titles"><a href="<?php print $node_url; ?>" rel="bookmark" title="<?php print $title;?>">
				<h1><?php print $title;?></h1>
				</a></div>
			<?php
				}
			?>
			<div class="tm_cat_item" <?php if($page) print ' style="margin-top:20px;"'?>>
				<div class="">
					<div class="tm_catpost_item_1"><i class="fa fa-user"></i><?php print t('By');?><?php print $node->name?></div>
					<div class="tm_catpost_item_2"><i class="fa fa-tag"></i><?php print t('In').' '; print render($content['field_categories'])?></div>
					<div class="tm_catpost_item_3"><i class="fa fa-calendar"></i><?php print format_date($node->created, 'custom', 'M d, Y');?></div>
					<div class="tm_catpost_item_4"><i class="fa fa-comments"></i><?php print $comment_count.t(' Comments')?></div>
				</div>
			</div>
			
			<div class="tm_cat_desc">
				<div class="tmpost-desc">
					<?php
							hide($content['comments']); 
							hide($content['links']); 
							hide($content['field_tags']); 
							hide($content['field_image']); 
							hide($content['field_categories']); 
							
							print render($content);
						?>
				</div>
				
				
				<?php
				if($page):
				?>
				
				<div class="share_post">
					<div class="share_post_pad">
						<!--facebook share-->
						<div class="share_post_facebook">
							<div class="fb-like" data-href="<?php print $node_url; ?>" data-send="false" data-layout="button_count" data-show-faces="false"></div>
						</div>
						<!--// facebook share-->
						<!--G+-->
						<div class="share_post_gplus">
							<div class="g-plus" data-action="share" data-annotation="bubble"></div>
						</div>
						<!--/G+-->
						<!--linkedIn-->
						<div class="share_post_linkedin">
							<script type="IN/Share" data-url="<?php print $node_url; ?>"></script>
						</div>
						<!--linkedIN-->
						<!--twitter share-->
						<div class="share_post_twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $node_url; ?>"><?php print t('Tweet');?></a></div>
						<!--/twitter share-->
					</div>
				</div>
				<?php print render($content['comments']); ?></div>
			<?php
				
				
			endif;
		?>
		</div>
	</div>
</div>

<?php
	}
}
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!--facebook javaScript SDK-->
<!--<gplus js>-->
<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
<!--</gplus js>-->
<!--<linkedin js>-->
<script type='text/javascript' src='//platform.linkedin.com/in.js'></script>
<!--</linkedin js>-->
<!--<twitter js>-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--</twitter js>-->