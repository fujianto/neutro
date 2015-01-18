<?php
/**
 * The template for displaying posts in the Link post format
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
				
				<?php if ( get_the_title() ) { ?>

					<header class="entry-header">
						<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
					</header><!-- .entry-header -->

				<?php } else { ?>
					
					<div class="entry-summary">
						<?php the_excerpt(); ?>
						<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>' ) ); ?>
					</div><!-- .entry-summary -->

				<?php } ?>
				
				<footer class="entry-meta">
					<?php include "template/long-content-meta.php"; ?>
					
				</footer><!-- .entry-footer -->


			</article><!-- .hentry -->




<?php } ?>

	