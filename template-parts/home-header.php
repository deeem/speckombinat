<?php
if( has_post_thumbnail() ) {
	$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
}
$logo_position = get_field( 'logo_position' ) ? get_field( 'logo_position' ) : 'right';
?>
<section id="hero"
		<?php if( $thumbnail_url ) : ?>
			style="background:url('<?php echo $thumbnail_url ?>') 50% 0 repeat fixed;"
		<?php endif; ?>
         data-type="background"
         data-speed="2">
	<div class="container">
		<div class="row">

			<?php if ( $logo_position == 'left' ) : ?>
			<div class="col-sm-6 logo-big">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_big.svg" alt="logo">
			</div><!-- col -->
			<?php endif; ?>

			<?php if ( $logo_position == 'center' ) : ?>
			<div class="col-sm-6 col-sm-offset-3 logo-big">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_big.svg" alt="logo">
			</div><!-- col -->
			<?php endif; ?>

			<?php if ( $logo_position == 'right' ) : ?>
			<div class="col-sm-6 col-sm-offset-6 logo-big">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_big.svg" alt="logo">
			</div><!-- col -->
			<?php endif; ?>

		</div><!-- row -->
	</div><!-- container -->
</section>