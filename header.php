<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Dosis|Cinzel|Gotu">
<link rel="stylesheet" href="https://use.typekit.net/aik1xka.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'affinity' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'components/header/header', 'image' ); ?>

		<?php get_template_part( 'components/header/site', 'branding' ); ?>

	</header>

	<div id="content" class="site-content">
