<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package speckombinat
 */

get_header(); ?>

<?php get_template_part( 'template-parts/index', 'header' ); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<main class="site-main" role="main">

				<?php

				$loop = new WP_Query( array(
					'meta_key'     => 'announce_until',
					'meta_value'   => time(),
					'meta_compare' => '>'
				) );

				if ( $loop->have_posts() ) :

					while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part( 'template-parts/content' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main>
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_template_part( 'template-parts/index', 'footer' ); ?>

<?php
get_footer();
