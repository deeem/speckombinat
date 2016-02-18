<?php
$loop = new WP_Query( array(
'meta_key'     => 'announce_until',
'meta_value'   => time(),
'meta_compare' => '>'
) );
$announces = $loop->found_posts;

if( $announces > 0 ) :
?>
<section id="announces">
	<div class="container">
		<h2>Оголошення</h2>
		<div class="row">
			<div class="col-sm-3">
				<div class="announces-icon">
					<img src="<?php echo  get_template_directory_uri()?>/img/radio-speaker.svg" alt="оголошення">
				</div>
			</div>
			<div class="col-sm-9">
				<?php
					$loop->have_posts();
					$loop->the_post();
					the_content();
				?>
			</div>
		</div><!-- .row -->
		<!-- есть еще больше объявлений ==прочитать== -->
	</div><!-- .container -->
</section><!-- #announces -->
<?php
endif;
wp_reset_query();

if( $announces > 1 ) : ?>
<section id="announces-more">
	<div class="container">
		<div class="row">
			<p class="pull-right">
				<strong><?php bloginfo('name'); ?></strong>&nbsp;
				<?php if( $announces == 2 ): ?>
					має ще одне оголошення для Вас&nbsp;&nbsp;&nbsp;
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>" class="btn btn-success">переглянути</a>
				<?php else : ?>
					має ще декілько оголошень для Вас&nbsp;&nbsp;&nbsp;
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>" class="btn btn-success">переглянути <span class="badge"><?php echo $announces ?></span></a>
				<?php endif; ?>
			</p>
		</div><!-- row -->
	</div><!-- .container -->
</section><!-- #announces-more -->
<?php endif; ?>




