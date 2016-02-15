<?php
/*
 * Template Name: Phones Page
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page', 'header' ); ?>

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
