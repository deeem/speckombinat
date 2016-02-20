<?php if( has_post_thumbnail() ) :
	$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<section id="page-header"
         class="feature-image-default"
         style="background-image: url('<?php echo $thumbnail_url;?>');"
         data-type="background" data-speed="2">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri();?>/img/logo_small.svg" alt="Logo Small">
	</div>
</section>

<?php else : ?>

<section id="page-header" class="feature-image-default" data-type="background" data-speed="2">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri();?>/img/logo_small.svg" alt="Logo Small">
	</div>
</section>

<?php endif; ?>