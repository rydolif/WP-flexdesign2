<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta property="og:image" content="<?php the_field('screenshot'); ?>">
	<meta name="google-site-verification" content="tJwB2ptvfjc5d8507HVRt1ORU7ni0uANuiI7rI5PaSI" />
</head>

<?php wp_head(); ?>

<body>

<?php get_template_part( 'parts/logo' ); ?>

<?php get_template_part( 'parts/preloader' ); ?>

<?php get_template_part( 'parts/soc' ); ?>

