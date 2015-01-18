<?php
/**
 * Comment meta Template
 *
 * Display meta information on Comment list
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.2
 */
?>

<div class="comment-meta">
	<?php echo hybrid_comment_author_shortcode(''); ?>
	<div class="comment-meta-wrapper"><span class="genericon genericon-time"></span>
		<?php echo hybrid_comment_published_shortcode(array('after' => ' | ', 'human_time' => __( '%s ago', 'neutro' ))); ?>
		<?php echo hybrid_comment_permalink_shortcode(array('after' => ' | ')); ?>
		<?php echo hybrid_comment_edit_link_shortcode(array('after' => '  ')); ?>
	</div>	
</div>