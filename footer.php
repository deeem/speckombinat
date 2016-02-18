<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="row">
					<div class="col-sm-6">
						<?php
						if (has_nav_menu( 'footer1' )){
							wp_nav_menu( array(
								'theme_location' => 'footer1',
								'container' => '',
							) );
						}
						?>
					</div><!-- col -->
					<div class="col-sm-6">
						<?php
						if (has_nav_menu( 'footer2' )){
							wp_nav_menu( array(
								'theme_location' => 'footer2',
								'container' => '',
							) );
						}
						?>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- col -->
			<div class="col-xsq-6 my-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_small.svg" width="80px">
				<p><?php echo date('Y'); ?> &copy; <?php bloginfo('name');?></p>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
