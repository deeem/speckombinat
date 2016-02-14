<?php
/*
 * Template Name: Phones Page
 */
?>

<?php get_header(); ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php if ( have_posts() ): the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section class="main-content">
				<?php echo the_content(); ?>
			</section>
		</div><!-- .col -->
	</div><!-- row -->
</div><!-- .container -->

<?php endif; ?>

<?php get_footer(); ?>

</body>
</html>
