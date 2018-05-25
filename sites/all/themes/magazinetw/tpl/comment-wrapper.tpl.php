<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>

<div id="respond" class="comment-respond">
	<h3 id="reply-title"><?php print t('LEAVE A REPLY');?></h3>
	<h3 id="reply-title" class="comments-title pull-left"><?php print $content['#node']->comment_count.' '.t('Comments');?></h3>
	<div class="clearfix"></div>
	<ol class="comment-list">
		<?php print render($content['comments']); ?>
	</ol>
	<?php print str_replace('resizable', '', render($content['comment_form'])); ?></div>
<?php } ?>
