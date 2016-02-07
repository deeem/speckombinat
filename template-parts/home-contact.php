<?php
$contact_name    = get_field( 'contact_name' );
$contact_ename   = get_field( 'contact_ename' );
$contact_address = get_field( 'contact_address' );
$contact_phone   = get_field( 'contact_phone' );
$contact_email   = get_field( 'contact_email' );
?>
<section id="contact">
	<div class="container">
		<h2>Контакти</h2>
		<div class="row">
			<div class="col-sm-6">
				<ul>
					<li><?php echo $contact_name; ?></li>
					<?php if (!empty( $contact_ename )) : ?>
						<li><?php echo $contact_ename; ?></li>
					<?php endif; ?>
				</ul>
			</div><!-- col -->
			<div class="col-sm-6">
				<ul>
					<?php if(!empty( $contact_address )) : ?>
						<li><span class="glyphicon glyphicon-map-marker"></span><?php echo $contact_address; ?></li>
					<?php endif; ?>
					<?php if(!empty( $contact_phone )) : ?>
						<li><span class="glyphicon glyphicon-phone-alt"></span><?php echo $contact_phone; ?></li>
					<?php endif; ?>
					<?php if(!empty( $contact_email )) : ?>
						<li><span class="glyphicon glyphicon-envelope"></span><?php echo $contact_email; ?></li>
					<?php endif; ?>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
		<div class="row">
			<div class="col-sm-12">
				<div id="map" style="width: 100%; height: 500px"></div>
			</div>
		</div>
	</div><!-- container -->
</section><!-- contact -->