<?php
/**
 * Long Content Template
 *
 * Display meta information on Content area on Index / front page
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.2
 */
?>

<p class="article-meta-extra"> 
	<?php echo hybrid_entry_author_shortcode(array( 'before' => '', 'after' => ' | ' )); ?>  
	<a href="<?php echo get_permalink(); ?>"><?php echo hybrid_entry_published_shortcode(''); ?></a> | 
	<?php echo hybrid_entry_terms_shortcode(array('taxonomy' => 'category', 'separator' => ', ', 'before' => 'In ', 'after' => ' | ' )); ?>
	<?php echo hybrid_entry_comments_link_shortcode(array( 'after' => ' | ')); ?>
	<?php echo hybrid_entry_edit_link_shortcode(array( 'after' => ' ')); ?>
</p>	