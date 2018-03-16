<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=325025177933050";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php   if(comments_open()): ?>

<div class="tabs comment">
<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
<label for="tab-1" class="tab-label-1"><i class="fa fa-facebook-square"></i>Facebook</label>
<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
<label for="tab-2" class="tab-label-2"><i class="fa"></i>coailinh.com</label>
<div class="clear-shadow"></div>
<div class="content-tab">
<div class="tab-1">

		<div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><p>


<div id="facebook-comments" style="margin-top:20px;">
<h3 id="reply-title">Bình luận</h3>
<fb:comments <span style="color: #ff0000;">xid="<?php the_ID(); ?>"</span> num_posts="5" width="100%"></fb:comments>
</div>

</div>
<div class="tab-2">
	<?php /* Comments Template */ 

if (post_password_required()) {
	return;
}
if (have_comments()) {
	$comments_by_type = separate_comments($comments);
	if (!empty($comments_by_type['comment'])) {
		$comment_count = count($comments_by_type['comment']); ?>
		<div id="mh-comments" class="mh-comments-wrap">
			<h4 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php printf(esc_html(_n('%d Comment', '%d Comments', $comment_count, 'mh-magazine-lite')), number_format_i18n($comment_count)); ?>
				</span>
			</h4>
			<ol class="commentlist mh-comment-list">
				<?php echo wp_list_comments('callback=mh_magazine_lite_comments&type=comment'); ?>
			</ol>
		</div><?php
	}
	if (get_comments_number() > get_option('comments_per_page')) { ?>
		<nav class="mh-comments-pagination">
			<?php paginate_comments_links(array('prev_text' => esc_html__('&laquo;', 'mh-magazine-lite'), 'next_text' => esc_html__('&raquo;', 'mh-magazine-lite'))); ?>
		</nav><?php
	}
	if (!empty($comments_by_type['pings'])) {
		$pings = $comments_by_type['pings'];
		$ping_count = count($comments_by_type['pings']); ?>
		<h4 class="mh-widget-title">
			<span class="mh-widget-title-inner">
				<?php printf(esc_html(_n('%d Trackback / Pingback', '%d Trackbacks / Pingbacks', $ping_count, 'mh-magazine-lite')), number_format_i18n($ping_count)); ?>
			</span>
		</h4>
		<ol class="pinglist mh-ping-list">
        	<?php foreach ($pings as $ping) { ?>
				<li id="comment-<?php comment_ID() ?>" <?php comment_class('mh-ping-item'); ?>>
					<?php echo '<i class="fa fa-link"></i>' . get_comment_author_link($ping); ?>
				</li>
			<?php } ?>
        </ol><?php
	}
	if (!comments_open()) { ?>
		<p class="mh-no-comments">
			<?php esc_html_e('Comments are closed.', 'mh-magazine-lite'); ?>
		</p><?php
	}
} else {
	if (comments_open()) { ?>

		<h4 id="mh-comments" class="mh-widget-title mh-comment-form-title">
			<span class="mh-widget-title-inner">
				<?php esc_html_e('Hãy trở thành người đầu tiên bình luận', 'mh-magazine-lite'); ?>
			</span>
		</h4>
		

<?php
	}
}
if (comments_open()) {
	comment_form(array(
		'title_reply' => esc_html__('Bình luận', 'mh-magazine-lite'),
        'comment_notes_before' => '<p class="comment-notes">' . esc_html__('Địa chỉ email của bạn sẽ không hiện trong bài đăng.', 'mh-magazine-lite') . '</p>',
        'comment_notes_after'  => '',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__('Comment', 'mh-magazine-lite') . '</label><br/><textarea id="comment" name="comment" cols="45" rows="5" aria-required="true"></textarea></p>'
	));
}
	

?>
</div>
</div>
</div>
<?php endif; // end comments_open() ?>
