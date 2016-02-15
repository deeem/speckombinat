<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package speckombinat
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page', 'header' ); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_template_part( 'template-parts/page', 'footer' ); ?>

<?php
get_footer();
