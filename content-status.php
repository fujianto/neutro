<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.0
 */
?>

<?php if ( is_singular( get_post_type() ) ) { ?>
	
	<article <?php hybrid_post_attributes(); ?>>

		<?php if ( get_option( 'show_avatars' ) ) { ?>

			<header class="entry-header">

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
				
			</header><!-- .entry-header -->
		
		<?php } ?>

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

			<?php if ( get_option( 'show_avatars' ) ) { ?>

				<header class="entry-header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
				</header><!-- .entry-header -->
			
			<?php } ?>

				<div class="entry-summary">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>' ) ); ?>
				</div><!-- .entry-summary -->

			<?php if ( !get_option( 'show_avatars' ) ) { ?>	

			<?php include "template/long-content-meta.php"; ?>
					
				</footer><!-- .entry-footer -->

			<?php } ?>

			</article><!-- .hentry -->

<?php } ?>

	