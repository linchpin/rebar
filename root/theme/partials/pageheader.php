<?php
/**
 * Slim Header
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Partials
 */
?>

<div class="full-page-header container">
	<div class="row">
		<div class="small-12 columns">
			<?php
			the_title( '<h1>', '</h1>', true );

			if ( function_exists( 'the_simple_subtitle' ) ) {
				the_simple_subtitle();
			}
			?>
		</div>
	</div>
</div>