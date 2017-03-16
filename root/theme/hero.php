<?php
/**
 * Hero/Slideshow area
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackge Templates
 *
 * Template Part: Hero
 */

?>
<header id="homepage-hero" class="container text-center" role="banner">
	<div class="row">
		<div class="columns">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4><?php _e( get_bloginfo( 'description' ), '{%= text_domain %}' ); ?></h4>
		</div>

		<div class="columns">
			<a class="download large button hide-for-small" href="https://github.com/linchpin/rebar"><?php esc_html_e( 'Download Rebar', '{%= text_domain %}' ); ?></a>
		</div>
	</div>
</header>
