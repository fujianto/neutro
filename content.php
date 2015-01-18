<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.0
 */
?>

<?php if ( is_singular( get_post_type() ) ) { ?>

	<article <?php hybrid_post_attributes(); ?>>

		<header class="entry-header">
			
			<h1 <?php ( function_exists('neutro_title_attribute') ? neutro_title_attribute() : '' ) ?>> <?php single_post_title(); ?> </h1>
		
			<?php if ( (function_exists('neutro_has_get_the_image') ? neutro_has_get_the_image() : '' ) ) if (comments_open() && !post_password_required()) 
				comments_popup_link('0', '1', '%','comment-counter'); ?>

				<?php $featured_image = neutro_featured_image_widths();
				if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'size' => $featured_image['size'], 'width' => $featured_image['width'], 'height' => $featured_image['height'], 'image_class' => 'featured-thumbnail', 'before' => '<figure>', 'after' => '</figure>' ) ); ?>	
			
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>', 'link_before' => '<span>', 'link_after' => '</span>', ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php include "template/short-content-meta.php"; ?>
		</footer><!-- .entry-footer -->
		
	</article>

<?php } else { ?>

		<article <?php hybrid_post_attributes(); ?>>	

			<header class="entry-header">
				<figure>
					<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'size' => 'small', 'width' => '370px', 'height' => '231px', 'image_class' => 'featured-thumbnail') ); ?>
				</figure>
				<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>' ) ); ?>
			</div><!-- .entry-summary -->
			
			<footer class="entry-meta">
				<?php include "template/long-content-meta.php"; ?>			
			</footer><!-- .entry-footer -->

		</article><!-- .hentry -->

<?php } ?>

	