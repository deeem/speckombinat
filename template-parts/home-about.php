<?php
$about_left  = get_field( 'about_left' );
$about_right = get_field( 'about_right' );
?>

<section id="about">
	<div class="container">
		<h2>Про підприємство</h2>
		<div class="row">
			<div class="col-sm-6">
				<p><?php echo $about_left; ?></p>
			</div><!-- col -->
			<div class="col-sm-6">
				<p><?php echo $about_right; ?></p>
			</div><!-- col -->
		</div><!-- row -->
	</div><!--container -->
</section><!-- about -->