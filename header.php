<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chan_Chan
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	
	<header>
		
		<!-- Top Header -->
		<?php get_template_part( 'template-parts/header/header', 'top' ); ?>

		<!-- Main Header -->
		<?php get_template_part( 'template-parts/header/header', 'main') ?>

		<!-- Bottom Header -->
		<?php get_template_part( 'templater-parts/header/header', 'bottom' ); ?>

	</header>

</div>