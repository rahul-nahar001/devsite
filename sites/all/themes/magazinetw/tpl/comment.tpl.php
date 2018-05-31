<li class="tm_category_box">
	<article class="comment-body" <?php if(!$picture) print ' style=" padding-left:0px;"';?>>
		<footer class="comment-meta">
			
		
			<div class="comment-author vcard">
			<?php 
				if($picture):
					print '<div class="gravatar">'.$picture.'</div>';
				endif;
			?>
			<H6><?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?></h6></div>
			<div class="comment-metadata"><a href="">
				<time datetime="<?php print t('!time ago',array('!time' => format_interval(time() - $content['comment_body']['#object']->created))); ?>"> <?php print t('!time ago',array('!time' => format_interval(time() - $content['comment_body']['#object']->created))); ?> </time>
				</a></div>
		</footer>
		<div class="comment-content">
			<?php hide($content['links']); print render($content) ?>
			<?php //print render($content['links']) ?>
		</div>
		<div class="comment-reply-edit"><?php print render($content['links']) ?></div>
	</article>
</li>