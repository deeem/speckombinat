<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>
	<link href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" rel="icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
