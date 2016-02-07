<section id="services">
	<div class="container">
		<h2>Послуги</h2>
		<div class="row">
			<?php $loop = new WP_Query( array(
				'post_type' => 'service',
				'orderby'   => 'post_id',
				'order'     => 'ASC'
			) );
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-sm-4">
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
					<?php the_content(); ?>
				</div><!-- col -->
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- services -->