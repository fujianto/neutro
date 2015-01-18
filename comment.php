<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?>">

	<article class="comment clearfix">
		
		<div class="comment-avatar pull-left"> <?php echo hybrid_avatar(); ?> </div> 

		<?php include "template/comment-meta.php"; ?>

		<div class="comment-content">
			<?php comment_text(); ?>
		</div><!-- .comment-content -->

		<?php echo hybrid_comment_reply_link_shortcode( array() ); ?>

	</article>
<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>