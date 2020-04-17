<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta property="og:image" content="<?php the_field('screenshot'); ?>">
</head>

<?php wp_head(); ?>

<body>

<?php get_template_part( 'parts/logo' ); ?>

<?php get_template_part( 'parts/preloader' ); ?>

<?php get_template_part( 'parts/soc' ); ?>

