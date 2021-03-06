<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage wbsPress
 * @since wbsPress 1.0.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<?php do_action( 'wbsPress_before_content' ); ?>

		<h2><?php _e( 'Search Results for', 'wbsPress' ); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>

	<?php do_action( 'wbsPress_before_pagination' ); ?>

	<?php if ( function_exists( 'wbsPress_pagination' ) ) { wbsPress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'wbsPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'wbsPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'wbsPress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
