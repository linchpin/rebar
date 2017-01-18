<?php
/**
 * Header Template
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Templates
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

	<?php
	/** This action is documented in includes/Linchpin/hatch-hooks.php */
	do_action( 'rebar_head_scripts' ); ?>

</head>
<body <?php body_class(); ?>>

<?php do_action( 'rebar_body_tag_after' ); ?>

<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'rebar_layout_start' ); ?>

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'rebar_header_before' ); ?>

		<?php get_template_part( 'partials/navigation' ); ?>

		<?php
		/** This action is documented in includes/Linchpin/hatch-hooks.php */
		do_action( 'rebar_header_after' ); ?>

		<section class="container" role="document">
