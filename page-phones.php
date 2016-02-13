<?php
/*
 * Template Name: Phones Page
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ): the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-1">
			<header>
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo_small.svg" alt="logo small"> -->
				<h1><?php the_title(); ?></h1>
			</header>
		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-1">
			<article>
				<?php echo the_content(); ?>
			</article>
		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
