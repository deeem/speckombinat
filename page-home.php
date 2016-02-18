<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/home', 'header' ); ?>

<?php get_template_part( 'template-parts/home', 'about' ); ?>

<?php get_template_part( 'template-parts/home', 'announces' ); ?>

<?php get_template_part( 'template-parts/home', 'services' ); ?>

<?php get_template_part( 'template-parts/home', 'contact' ); ?>

<?php get_footer(); ?>