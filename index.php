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

<section id="page-header" class="feature-image-default" data-type="background" data-speed="2">
	<div class="container">
		<h1><?php single_post_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri();?>/img/logo_small.svg" alt="Logo Small">
	</div>
</section>

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

<section id="page-footer" class="feature-image-default" data-type="background" data-speed="2">
	<div class="container">
		<h1>&nbsp;</h1>
	</div>
</section>

<?php
get_footer();
