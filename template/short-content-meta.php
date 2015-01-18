<?php
/**
 * Short Content Template
 *
 * Display meta information on Content area on single page
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.2
 */
?>


<div class="single-entry-meta">
	<?php echo hybrid_entry_published_shortcode(''); ?>
	<?php echo hybrid_entry_terms_shortcode(array('taxonomy' => 'category', 'separator' => ', ')); ?>
	<?php echo hybrid_entry_terms_shortcode(array('taxonomy' => 'post_tag', 'separator' => ', ')); ?>
	<?php echo hybrid_entry_edit_link_shortcode(''); ?>
</div>	